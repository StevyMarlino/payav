<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class resetController extends Controller
{
    public function check(Request $request)
    {
       $phone = User::where('phone',$request['full_phone'])->first();

       if(!isset($phone->exists) && is_null($phone))
       {
           return redirect()->back()->withErrors('User with the phone number not found ' );
       }

       return redirect()->route('verify.otp',$request['full_phone']);
    }

    public function getOtp($phone)
    {
        return view('auth.verify-phone',['phone' => $phone]);
    }
}
