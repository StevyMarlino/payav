<?php

namespace App\Traits\Flutterwave;

use App\Models\Transaction;
use App\Models\User;
use Illuminate\Support\Str;

trait FlutterwaveUtilsTrait
{
    use FlutterwaveMethodeTrait;

    protected function get_encryption_key($seckey)
    {
        $hashedkey = md5($seckey);
        $hashedkeylast12 = substr($hashedkey, -12);

        $seckeyadjusted = str_replace("FLWSECK-", "", $seckey);
        $seckeyadjustedfirst12 = substr($seckeyadjusted, 0, 12);

        $encryptionkey = $seckeyadjustedfirst12 . $hashedkeylast12;
        return $encryptionkey;
    }

    protected function sanitize_payload(array $payload): array
    {
        if (!isset($payload["user_id"])) {
            $payload["user_id"] = -1;
        }
        return $payload;
    }

    protected function encrypt_3Des($data, $key)
    {
        $encData = openssl_encrypt($data, 'DES-EDE3', $key, OPENSSL_RAW_DATA);
        return base64_encode($encData);
    }

    private function get_collection_payment_data(string $payeerId, float $amount, string $txref, string $transaction_id, array $payload)
    {
        $user = $this->user;
        if (!$user) {
            return false;
        }
        $this->amount = $amount;
        $this->txref = $txref;
        $this->payeerId = $payeerId;
        $this->payload = $payload;
        $this->transaction_id = $transaction_id;
        $type = $this->type;
        $data = $this->$type();
        $this->save_transaction_data();
        return $data;
    }

    private function get_encoded_collection_body(array $data): array
    {
        $post_enc = $this->encrypt_3Des(json_encode($data), $this->crypt_key);
        $postdata = array(
            'client' => $post_enc
        );
        return $postdata;
    }

    private function is_valid_collection_response($parsed_response)
    {
        if (!$parsed_response) {
            return false;
        }
        $data = (array)$parsed_response;
        $status = $data["status"] ?? null;
        if ($status == "error" || is_null($status)) {
            return false;
        }
        if ((isset($data["error"]) && !empty($data["error"]))) {
            return false;
        }
        return true;
    }

    public function txref()
    {
        return Str::uuid();
    }

    private function save_transaction_data()
    {
        Transaction::create([
            "transaction_id" => $this->transaction_id,
            "amount" => $this->amount,
            "code_transaction" => $this->txref,
            "payment_methode" => $this->type,
            "identity" => $this->payeerId,
            "user_id" => $this->user->id,
            "currency" => $this->currency,
        ]);

    }


}
