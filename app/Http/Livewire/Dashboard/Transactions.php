<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

class Transactions extends Component
{
    public function render()
    {
        return view('livewire.dashboard.transactions')
            ->extends('layouts.dashboard')
            ->section('content');
    }
}
