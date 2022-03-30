<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use WireUi\Traits\Actions;

class Register extends Component
{
    use Actions;

    public $name;
    public $email;
    public $phone;
    public $password;
    public $password_confirmation;
    public $terms;

    public $rules = [
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'phone' => ['required', 'string', 'max:255', 'unique:users'],
        'password' => ['required', 'string', 'confirmed'],
        'terms' => ['accepted', 'required']
    ];

    public function save()
    {
        $this->validate();

        try {
            User::create([
                'name' => $this->name,
                'email' => $this->email,
                'phone' => $this->phone,
                'client_id' => strtoupper(uniqid()),
                'password' => Hash::make($this->password),
            ]);
            $this->notification()->notify([
                'title' => 'Profile saved!',
                'description' => 'Your profile was successfull saved',
                'icon' => 'success'
            ]);
            $this->reset();
        } catch (\Exception $error) {
            $this->notification()->notify([
                'title' => 'Oops!',
                'description' => 'Oops, Something Wrong',
                'icon' => 'error'
            ]);
        }
    }

    public function render()
    {
        return view('livewire.register');
    }
}
