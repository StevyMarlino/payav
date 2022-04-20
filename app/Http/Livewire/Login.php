<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Livewire\Component;
use Laravel\Socialite\Facades\Socialite;

class Login extends Component
{
    public $email;
    public $password;

    protected $rules = [
        'email' => 'required|string|email',
        'password' => 'required',
    ];

    public function save()
    {
        if (!Auth::attempt($this->validate())) {

            RateLimiter::hit($this->throttleKey());

            throw ValidationException::withMessages([
                'email' => __('auth.failed'),
            ]);
        }

        return redirect(RouteServiceProvider::HOME);
    }

    public function throttleKey()
    {
        return Str::lower($this->email) . '|' . request()->ip();
    }

    public function render()
    {
        return view('livewire.login');
    }

    public function google()
    {
        // send the user's request to google
        return Socialite::driver('google')->redirect();
    }

    public function googleRedirect()
    {
        $user = Socialite::driver('google')->user();

        $user = User::firstOrCreate([
            'email' => $user->email
        ],[
            'name' => $user->name,
            'password' => Hash::make(str::random(24)),
            'client_id' => strtoupper(uniqid()),
        ]);

        Auth::login($user, true);

        return redirect(RouteServiceProvider::HOME);

    }
}
