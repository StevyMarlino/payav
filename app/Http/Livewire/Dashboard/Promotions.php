<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

class Promotions extends Component
{
    public function render()
    {
        return view('livewire.dashboard.promotions')
            ->extends('layouts.dashboard')
            ->section('content');
    }
}
