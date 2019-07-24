<?php

namespace App\Http\Controllers\Auth;

use \Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PhoneVerificationController extends Controller
{
    public function show(Request $request)
    {
        return $request->user()->hasVerifiedPhone() ? redirect()->route('home') : view('auth.verify-phone');
    }

    public function verify(Request $request)
    {
        if($request->user()->verification_code !== $request->code){
            throw ValidationException::withMessages([
                'code' => ['The code your provided is wrong. Please try again or request another code.']
            ]);
        }


        if($request->user()->hasVerifiedPhone()){
            return redirect()->route('home');
        }


        $request->user()->markPhoneAsVerified();

        return redirect()->route('shipper-dash')->with(['status' => 'Your phone was successfully verified!']);
    }//verify

}
