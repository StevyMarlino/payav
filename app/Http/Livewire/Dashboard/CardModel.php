<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Transaction;
use Livewire\Component;

class CardModel extends Component
{
    public function render()
    {
        return view('livewire.dashboard.card-model',[
            'pending' => Transaction::isPending(),
            'completed' => Transaction::isCompleted()
        ]);
    }
}
