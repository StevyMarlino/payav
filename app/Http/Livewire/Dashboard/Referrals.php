<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

class Referrals extends Component
{
    public function render()
    {
        $data = [
            'currentPage' => 'Referrals'
        ];
        return view('livewire.dashboard.referrals')
            ->extends('layouts.dashboard',$data)
            ->section('content');
    }
}
