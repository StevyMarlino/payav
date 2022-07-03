<?php 
namespace App\Traits\Flutterwave;

trait FlutterwaveMethodeTrait{
    private $amount;
    private $network;
    private $txref;
    private $payeerId;
    private $payload;
    private $transaction_id;


    public function mobile_money_ghana()
    {
        return [
        'tx_ref' => $this->txref,
        'amount' => $this->amount,
        'currency' => $this->currency,
        'voucher' =>  $this->transaction_id,
        'network' => $this->network,
        'email' => $this->user->email,
        'order_id' => $this->transaction_id,
        'phone_number' => $this->payeerId, 
        'fullname' => $this->user->first_name.' '.$this->user->last_name,
        ];
    }

    public function mobile_money_franco()
    {
        return [
            'tx_ref' => $this->txref,
            'amount' => $this->amount,
            'currency' => $this->currency,
            'email' => $this->user->email,
            'order_id' => $this->transaction_id,
            'phone_number' => $this->payeerId,
            'fullname' => $this->user->first_name.' '.$this->user->last_name,
        ];
    }
    
    public function mpesa()
    {
        return [
            'tx_ref' => $this->txref,
            'amount' => $this->amount,
            'currency' => $this->currency,
            'email' => $this->user->email,
            'order_id' => $this->transaction_id,
            'phone_number' => $this->payeerId,
            'fullname' => $this->user->first_name.' '.$this->user->last_name,
        ];
    }

    public function mobile_money_rwanda()
    {
        return [
            'tx_ref' => $this->txref,
            'amount' => $this->amount,
            'currency' => $this->currency,
            'email' => $this->user->email,
            'order_id' => $this->transaction_id,
            'phone_number' => $this->payeerId,
            'fullname' => $this->user->first_name.' '.$this->user->last_name,
        ];
    }

    public function mobile_money_uganda()
    {
        return [
            'tx_ref' => $this->txref,
            'amount' => $this->amount,
            'currency' => $this->currency,
            'voucher' =>  $this->transaction_id,
            'network' => $this->network,
            'email' => $this->user->email,
            'order_id' => $this->transaction_id,
            'phone_number' => $this->payeerId, 
            'fullname' => $this->user->first_name.' '.$this->user->last_name,
        ];
    }
    public function mobile_money_zambia()
    {
        return [
            'tx_ref' => $this->txref,
            'amount' => $this->amount,
            'currency' => $this->currency,
            'voucher' =>  $this->transaction_id,
            'network' => $this->network,
            'email' => $this->user->email,
            'order_id' => $this->transaction_id,
            'phone_number' => $this->payeerId, 
            'fullname' => $this->user->first_name.' '.$this->user->last_name,
        ];
    }
    public function ach_payment()
    {
       return [
        'tx_ref' => $this->txref,
        'amount' => $this->amount,
        'currency' => $this->currency,
        'country' => 'US',
        'email' => $this->user->email,
        'phone_number' => $this->payeerId,
        'fullname' => $this->user->first_name.' '.$this->user->last_name,
        
    ];
    }

    public function debit_ng_account()
    {
        return [
            'tx_ref' => $this->txref,
            'amount' => $this->amount,
            'account_bank' => $this->payload['bvn'],
            'account_number' => $this->payload['accountnumber'],
            'currency' => 'NGN',
            'email' => $this->user->email,
            'phone_number' => $this->payeerId,
            'fullname' => $this->user->first_name.' '.$this->user->last_name,
        ];
    }

    public function paypal()
    {
        return [
            'tx_ref' => $this->txref,
            'amount' => $this->amount,
            'currency' => 'USD',
            'country' => 'US',
            'email' => $this->user->email,
            'phone_number' => $this->payeerId,
            'fullname' =>  $this->user->first_name.' '.$this->user->last_name,
            'billing_address' => $this->user->address??null,
            'billing_city' => $this->user->city??null,
            'billing_zip' => $this->user->zip??null,
            'billing_state' => $this->user->state??null,
            'billing_country' => $this->user->country??null,
            'shipping_name' => $this->user->first_name.' '.$this->user->last_name,
        ];
    }

    public function debit_uk_account()
    {
        return [
            'tx_ref' => $this->txref,
            'amount' => $this->amount,
            'type' => 'debit_uk_account',
            'account_bank' => $this->payload['bvn'],
            'account_number' => $this->payload['accountnumber'],
            'currency' => $this->currency,
            'email' => $this->user->email,
            'phone_number' => $this->payeerId??null,
            'fullname' => $this->user->first_name.' '.$this->user->last_name,
        ];
    }

    public function ussd()
    {
       return [
        'tx_ref' => $this->txref,
        'account_bank' => $this->payload['bvn'],
        'amount' => $this->amount,
        'currency' => $this->currency,
        'email' => $this->user->email,
        'phone_number' => $this->payeerId??null,
        'fullname' => $this->user->first_name.' '.$this->user->last_name,
       ];
    }

    public function card()
    {
        
        $this->payload=$this->payload[0];
        return $this->get_encoded_collection_body([
            'card_number' => $this->payload['cardno'],
            'cvv' =>  $this->payload['cvv'],
            'expiry_month' => $this->payload['expirymonth'],
            'expiry_year' => $this->payload['expiryyear'],
            'currency' => $this->currency,
            'amount' => $this->amount,
            'fullname' => $this->user->first_name.' '.$this->user->last_name,
            'email' => $this->user->email,
            'tx_ref' => $this->txref,
        ]);
    }
    public function bank_transfer()
    {
        return [
            'tx_ref' => $this->txref,
            'amount' => $this->amount,
            'email' => $this->user->email,
            'phone_number' => $this->payeerId??null,
            'currency' => $this->currency,
            'narration' => 'Buy hosting',
            'is_permanent' => false,
        ];
    }
}