<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Http\Requests\PaymentRequest;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Traits\Flutterwave\FlutterwaveUtilsTrait;

class PaymentController extends Controller
{
    use FlutterwaveUtilsTrait;

    private $public_key;
    private $private_key;
    private $crypt_key;
    private $currency;
    private $type;
    private $user;

    public function __construct()
    {
        $this->public_key = config("flutterwave.api_key");
        $this->private_key = config("flutterwave.api_secret");
        $this->crypt_key = config("flutterwave.api_crypte");
    }

    public function initiate(Request $request)
    {
        # code...
    }

    public function collect(PaymentRequest $request)
    {

        $transaction_id = $request->order_id;
        $payload = $request->cardInfo;
        $identifier = $request->phone;
        $amount = $request->amount;
        $this->type = $request->type;
        $this->currency = $request->currency;
        $this->user = json_decode(json_encode($request->user));

        if (is_null($transaction_id)) {
            return response()->json(['status' => "fail", "message" => "order id not found"], 500);
        }
        $payload = $this->sanitize_payload($payload);

        $txref = $this->txref();

        $data = $this->get_collection_payment_data($identifier, (float)$amount, $txref, $transaction_id, $payload);
        if (false === $data) return response()->json(['status' => "fail", "message" => "an unexpected error"], 200);
        $client = new Client();
        try {
            $response = $client->request('POST', "https://api.flutterwave.com/v3/charges?type=" . $this->type, [
                'json' => $data,
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->private_key,
                    'content-type' => 'application/json'
                ]
            ]);
            $result = json_decode($body = (string)$response->getBody());
        } catch (\GuzzleHttp\Exception\BadResponseException $err) {
            Log::error('The response received for collect with flutterwave is not valid. response body: ' . (string)$err->getResponse()->getBody());
            return response()->json(json_decode((string)$err->getResponse()->getBody()), 200);
        } catch (\Exception $err) {
            Log::error('The response received for collect with flutterwave is not valid. err: ' . $err->getMessage());
            return response()->json(['status' => "fail", "message" => $err->getMessage()], 200);
        }
        if (!$this->is_valid_collection_response($result)) {
            Log::error('The response received for collect with flutterwave is not valid. response body: ' . $body);
            return response()->json(['status' => "fail", "message" => $body], 500);
        }
        $other_response_args = [];
        $autorization_mode = $result->meta->authorization->mode ?? null;
        if ($autorization_mode === "banktransfer") {
            $other_response_args["bankInfo"] = [
                "bank_name" => $result->meta->authorization->transfer_bank,
                "account_number" => $result->meta->authorization->transfer_account,
                "amount" => $result->meta->authorization->transfer_amount,
                "currency" => $this->currency->caption_currency
            ];
            $other_response_args["payment_data"] = $data;
        }
        if (isset($result->data->link) || isset($result->meta->authorization->redirect)) {
            $url = isset($result->data->link) ? $result->data->link : $result->meta->authorization->redirect;
            if ($url != "NO-URL") {
                $other_response_args["payment_url"] = $url;
            }
        }

        $other_response_args['status'] = "success";
        $other_response_args['check_url'] = route('payment.check', ['track' => $txref]);
        $other_response_args['message'] = "Paiement initiate ,veuillez confirmer votre paiement";

        return response()->json($other_response_args, 202);
    }

    public function validate_payment(string $otp, string $flutterwaveRef)
    {
        try {
            $client = new Client();
            $response = $client->request('POST', "https://api.flutterwave.com/v3/validate-charge", [
                'json' => [
                    'type' => "card",
                    "flw_ref" => $flutterwaveRef,
                    "otp" => $otp
                ],
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->private_key,
                    'content-type' => 'application/json'
                ]
            ]);
            $result = json_decode((string)$response->getBody(), true);
            if (!isset($result["status"]) || $result["status"] != "success") {
                return response()->json(['status' => "fail", "message" => "Payment fail"], 500);
            }
            return response()->json(['status' => "success", "message" => "Payment Success"], 200);
        } catch (\Exception $e) {
            Log::error("failed to validate flutterwave otp response: " . $e->getMessage());
            return response()->json(['status' => "fail", "message" => "Payment fail"], 500);
        }
    }

    public function getPaymentStatus($track)
    {
        $data = Transaction::whereCodeTransaction($track)->first();
        if (empty($data)) {
            Log::error("transaction with reference [$track] was not found");
            return response()->json(['status' => "fail", "message" => "Transaction not found"], 500);
        }
        if (!$data->status) {
            return response()->json(['status' => "fail", "message" => "Payment fail"], 500);
        }
        if ($data->status) {
            return response()->json(['status' => "success", "message" => "Payment Success"], 200);
        }
        if ($data->status == "Pending") {
            return response()->json(['status' => "pending", "message" => "check again"], 200);
        }
    }
}
