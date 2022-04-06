<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Transaction;
use Livewire\Component;

class Transactions extends Component
{
    public function render()
    {
        return view('livewire.dashboard.transactions', [
            'withDraw' => Transaction::countWithdraw(),
            'deposit' => Transaction::countDeposit(),
            'exchange' => Transaction::countExchange(),
            'amountWithdraw' => Transaction::amountWithdrawTotal(),
            'amountDeposit' => Transaction::amountDepositTotal(),
            'amountExchange' => Transaction::amountExchangeTotal(),
            'myWithdrawOrDepositTransaction' => Transaction::myWithdrawOrDepositTransaction(),
            'myExchangeTransaction' => Transaction::myExchangeTransaction()

        ])
            ->extends('layouts.dashboard')
            ->section('content');
    }
}
