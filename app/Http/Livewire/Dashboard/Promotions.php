<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

class Promotions extends Component
{
    public function render()
    {
        $data = [
            'currentPage' => 'Promotion'
        ];
        return view('livewire.dashboard.promotions')
            ->extends('layouts.dashboard',$data)
            ->section('content');
    }
}
