<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Deposit extends Component
{
    public function render()
    {
        $data = [
            'currentPage' => 'Deposit'
        ];
        return view('livewire.deposit')
            ->extends('layouts.dashboard',$data)
            ->section('content');
    }
}
