<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Http\Request;
use Livewire\Component;
class ResetPassword extends Component
{
    public $display = false;
    public $phone;


    public function render()
    {
        return view('livewire.reset-password');
    }

    public function check()
    {

    }



}
