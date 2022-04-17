<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

class Exchange extends Component
{
    public function render()
    {
        return view('livewire.dashboard.exchange')
            ->extends('layouts.dashboard')
            ->section('content');
    }
}
