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
    private $client_id;

    public $rules = [
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //'user.client_id' => ['required', 'string', 'max:255', 'unique:users'],
        'phone' => ['required', 'string', 'max:255', 'unique:users'],
        'password' => ['required', 'string', 'confirmed'],
        'terms' => ['accepted', 'required']
    ];

    public function mount()
    {
        $this->client_id = uniqid();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $this->validate();


            User::create([
                'name' => $this->name,
                'email' => $this->email,
                'phone' => $this->phone,
                'client_id' => uniqid(),
                'password' => Hash::make($this->password),
            ]);
            $this->notification()->notify([
                'title'       => 'Profile saved!',
                'description' => 'Your profile was successfull saved',
                'icon'        => 'success'
            ]);

    }

    public function render()
    {
        return view('livewire.register');
    }
}
