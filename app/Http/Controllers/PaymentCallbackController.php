<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Traits\Flutterwave\FlutterwaveVerifyTrait;

class PaymentCallbackController extends Controller
{
    use FlutterwaveVerifyTrait;

    private $public_key;
    private $private_key;
    private $crypt_key;

    public function __construct()
    {
        $this->public_key = config("flutterwave.api_key");
        $this->private_key = config("flutterwave.api_secret");
        $this->crypt_key = config("flutterwave.api_crypte");
    }

    private function log(string $message)
    {
        Log::error("flutterwave callback: $message");
    }

    private function exit(string $message = "invalid request")
    {
        $this->log("========end========");
        exit($message);
    }

    public function index()
    {
        $this->log("========start========");
        Log::info("flutterwave callback");
        $body = @file_get_contents("php://input");
        $secret = (isset($_SERVER['HTTP_VERIF_HASH']) ? $_SERVER['HTTP_VERIF_HASH'] : '');
        if (!$secret) {
            $this->log("secret missing");
            return $this->exit();
        }
        $local_secret = $this->crypt_key;
        if ($secret !== $local_secret) {
            $this->log("secret invalid, $secret recevied");
            return $this->exit();
        }
        $response = json_decode($body, true);
        if (!$response) {
            $this->log("no/invalid response: $body");
            return $this->exit();
        }
        if (!isset($response["data"]["status"]) || !isset($response["event"]) || !isset($response["data"]["id"])) {
            $this->log("status/event/id misssing: $body");
            return $this->exit();
        }
        $flutterwave_trans_id = $response["data"]["id"];
        $status = strtoupper($response["data"]["status"]);
        if (!in_array($status, ["SUCCESSFUL", "SUCCESS", "FAILED"])) {
            $this->log("invalid transaction status [$status] received");
            return $this->exit();
        }
        $this->log("body $body");
        $event = $response["event"];
        $type = (strpos($event, "charge") !== false) ? "charge" : "transfer";
        if ($type == "charge") {
            $tx_ref = $response["data"]["tx_ref"] ?? null;
        } else {
            $tx_ref = $response["data"]["reference"] ?? null;
        }
        if (is_null($tx_ref)) {
            $this->log("invalid/missing txref");
            return $this->exit();
        }
        $data = Transaction::whereCodeTransaction($tx_ref)->first();
        if (empty($data)) {
            $this->log("transaction with reference [$tx_ref] was not found");
            return $this->exit();
        }
        $code_transaction = $data->code_transaction;
        if ($status === "FAILED") {
            Transaction::cancel($data->code_transaction);
            $this->log("transaction [$code_transaction] was cancelled");
            return $this->exit("ok");
        }

        $currency = $data->currency;
        if (!$currency) {
            $this->log("invalid transaction currency");
            return $this->exit("ok");
        }
        try {
            $this->verify_flutterwave_trans($flutterwave_trans_id, $currency, $data->amount);
        } catch (\Exception $e) {
            $this->log($e->getMessage());
            Transaction::cancel($data->code_transaction);
            return $this->exit("ok");
        }
        Transaction::complete($data->code_transaction);
    }
}
