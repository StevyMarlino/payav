<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TableTransaction extends Component
{
    public function render()
    {
        $data = [
            'currentPage' => 'Transactions'
        ];
        return view('livewire.dashboard.table-transaction',[
            'transactions' => Auth::user()->transactions
        ]);
    }
}
