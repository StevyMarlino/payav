<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class resetController extends Controller
{
    public function check(Request $request)
    {
       $phone = User::where('phone',$request['full_phone'])->first();

       if(!isset($phone->exists) && is_null($phone))
       {
           return redirect()->back()->withErrors('User with the phone number not found ' );
       }

       session()->put('verify','yes');
       session()->put('phone',$request['full_phone']);
       return redirect()->route('password.request');
    }

    public function resetPass()
    {
        return view('auth.reset-password');
    }

    public function updatePassword(Request $request)
    {

        $request->validate([
            'phone' => 'required',
            'password' => 'required|min:8|confirmed',
        ]);


        User::where('phone', session('phone'))
            ->update(['password' => Hash::make($request->password)]);

        session()->forget(['verify','phone']);
        return redirect()->route('login')->with('status', __('Password successfully updated'));
    }

}
