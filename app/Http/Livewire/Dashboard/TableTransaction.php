<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Transaction;
use Livewire\Component;

class TableTransaction extends Component
{
    public function render()
    {
        return view('livewire.dashboard.table-transaction',[
            'transactions' => Transaction::all()
        ]);
    }
}
