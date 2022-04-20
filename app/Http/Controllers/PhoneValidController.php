<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PhoneValidController extends Controller
{
    public function verify(Request $request)
    {
        $phone = User::where('phone',$request['full_phone'])->first();

        if(!isset($phone->exists) && is_null($phone))
        {
            return redirect()->back()->withErrors('User with the phone number not found ' );
        }

        session()->put('google_phone_verify','yes');
        session()->put('phone_google',$request['full_phone']);
        return redirect()->route('phone-verify');
    }
}