<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

class DepositOrWithdraw extends Component
{
    public function render()
    {
        return view('livewire.dashboard.deposit-or-withdraw')
            ->extends('layouts.dashboard')
            ->section('content');
    }
}
