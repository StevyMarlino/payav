<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Withdraw extends Component
{
    public function render()
    {
        $data = [
            'currentPage' => 'Withdraw'
        ];
        return view('livewire.withdraw')
            ->extends('layouts.dashboard',$data)
            ->section('content');
    }
}
