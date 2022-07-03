<?php

namespace App\Traits\Flutterwave;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;

trait FlutterwaveVerifyTrait
{


    public function verify_flutterwave_trans(string $transaction_secret, string $currency, $amount): bool
    {
        if (!is_numeric($amount)) {
            throw new \Exception("invalid amount");
        }
        $transaction_info = $this->get_flutterwave_transaction_info($transaction_secret);
        if (!$transaction_info) {
            throw new \Exception("invalid response");
        }
        $transaction_status = $transaction_info["status"] ?? "";;
        $transaction_status = strtoupper($transaction_status);
        $payment_type = $transaction_info["payment_type"] ?? "";
        if (($transaction_status !== "SUCCESSFUL") && ($transaction_status !== "SUCCESS")) {
            throw new \Exception("invalid transaction status: $transaction_status");
        }
        if (($transaction_info["currency"] !== $currency) && ($payment_type !== "card" && $transaction_info["currency"] !== "USD")) {
            throw new \Exception("invalid currency");
        }
        $transaction_amount = $transaction_info["amount"] ?? null;
        if (!$transaction_amount || !is_numeric($amount) || ($transaction_amount < $amount)) {
            throw new \Exception("the amount received [$transaction_amount] [$currency] is less than expected or invalid");
        }
        return true;
    }

    public function get_flutterwave_transaction_info(string $transaction_secret): ?array
    {
        try {
            $client = new Client();
            $response = $client->request('GET', "https://api.flutterwave.com/v3/transactions/$transaction_secret/verify", [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->private_key,
                    'content-type' => 'application/json'
                ]
            ]);
            $data = json_decode($body = (string)$response->getBody(), true);
            Log::error("flutterwave status: checking flutterwave transaction status. response: $body");
        } catch (\Exception $err) {
            Log::error("flutterwave status: checking flutterwave transaction status. invalid response received: " . $err->getMessage());
            return null;
        }
        return $data["data"] ?? null;
    }


}
