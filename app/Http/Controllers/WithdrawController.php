<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WithdrawController extends Controller
{
    public function withdraw(Request $request)
    {
        $myAppId = config('deriv.app_id');

        $token = config('deriv.token');

        \Ratchet\Client\connect('wss://ws.binaryws.com/websockets/v3?app_id=' . $myAppId)->then(function ($conn) use ($request, $token) {
            $conn->on('message', function ($msg) use ($request, $conn, $token) {
                // echo $msg."\n"; Uncomment this to see full JSON return message.
                $msgPHP = json_decode($msg, 1);
                if (isset($msgPHP["error"])) {

                    echo  "This transaction cannot be done, please contact the technical support";
                    $conn->close();

                } else if ($msgPHP["msg_type"] == 'authorize') {  // We have a successful authorization so we can now send a deposit.
                    /*
                     * Since there can be no guarantee of the order of the calls when using websocket we need
                     * to check that we have received a reply to the authorize call before sending the buy
                     * request.
                     */

                    $data = [
                        "paymentagent_transfer" => 1,
                        "amount" => $request->amount,
                        "currency" => $request->currency,
                        "transfer_to" => $request->account_id
                    ];

                    $response = $conn->send(json_encode($data));

                    $result = json_decode($response);

                    echo $result;
                }
            });
            $conn->send('{"authorize" : "' . $token . '"}');

        }, function ($e) {
            echo "Could not connect: {$e->getMessage()}\n";
        });
    }
}
