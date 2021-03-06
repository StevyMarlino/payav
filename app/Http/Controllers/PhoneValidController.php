<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PhoneValidController extends Controller
{

    public function verify(Request $request)
    {
        $phone = User::find(Auth::user()->getAuthIdentifier());

        if (!isset($phone->exists) && is_null($phone)) {
            return redirect()->back()->withErrors('User with the phone number not found ');
        }


        session()->put('google_phone_verify', 'yes');
        session()->put('phone_google', $request['full_phone']);

        return redirect()->route('phone-verify');
    }

    public function codeVerify(Request $request)
    {
        try {
            $phone = User::find(Auth::user()->getAuthIdentifier());

            $phone->phone = $request['full_phone'];
            $phone->save();

            session()->forget(['google_phone_verify', 'phone_google','exist_phone']);
            return response()->json([
                'success' => true,
                'message' => 'phone verify'
            ]);
        } catch(\Exception $error) {

            session()->forget(['google_phone_verify', 'phone_google']);
            session()->put('exist_phone', 'Duplicate phone number choise another number');
        }

    }
}
