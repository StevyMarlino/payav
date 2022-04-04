<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Transaction;
use Livewire\Component;

class CardModel extends Component
{
    public function render()
    {
        return view('livewire.dashboard.card-model',[
            'pending' => Transaction::where('status',0)->count(),
            'completed' => Transaction::where('status',1)->count()
        ]);
    }
}
