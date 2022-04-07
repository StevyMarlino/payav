<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

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
        dd(request());
        $phone = User::select('phone', request()->get('full_phone'));

        dd($phone->exists());


    }



}
