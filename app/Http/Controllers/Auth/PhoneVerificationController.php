<?php

namespace App\Http\Controllers\Auth;

use App\Carrier;
use App\Shipper;
use \Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PhoneVerificationController extends Controller
{
    public function show(Request $request)
    {
        return $request->user()->hasVerifiedPhone() ? redirect()->route('/') : view('auth.verify-phone');
    }

    public function verify(Request $request)
    {
        if($request->user()->verification_code !== $request->code){
            throw ValidationException::withMessages([
                'code' => ['The code your provided is wrong. Please try again or request another code.']
            ]);
        }


        if($request->user()->hasVerifiedPhone()){
            return redirect()->route('start');
        }

        $request->user()->markPhoneAsVerified();

        $carrier = Carrier::where('user_id', $request->user()->id);
        $shipper = Shipper::where('user_id', $request->user()->id);

        if($carrier)
            return redirect()->route('carrier-dash')->with(['status' => 'Your phone was successfully verified!']);

        if($shipper)
            return redirect()->route('shipper-dash')->with(['status' => 'Your phone was successfully verified!']);

        return redirect()->route('start');

    }//verify

}
