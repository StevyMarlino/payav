<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

class Exchange extends Component
{
    public function render()
    {
        $data = [
            'currentPage' => 'Exchange'
        ];
        return view('livewire.dashboard.exchange')
            ->extends('layouts.dashboard',$data)
            ->section('content');
    }
}
