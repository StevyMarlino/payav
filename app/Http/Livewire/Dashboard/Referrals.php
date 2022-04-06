<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

class Referrals extends Component
{
    public function render()
    {
        return view('livewire.dashboard.referrals')
            ->extends('layouts.dashboard')
            ->section('content');
    }
}
