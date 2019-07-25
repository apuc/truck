<?php

namespace App\Http\Controllers\Auth;

use App\Carrier;
use App\Shipper;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Validation\ValidationException;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'unique:users'],
            'password' => ['required', 'string', 'min:1', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'phone' => $data['phone'],
            'password' => Hash::make($data['password']),
        ]);
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        return $this->registered($request, $user)
            ?: redirect($this->redirectPath())->with(['status' => 'Check your WhatsUp for code end enter it while login']);
    }

    /**
     * The user has been registered.
     *
     * @param  Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function registered(Request $request, User $user)
    {
        if($request->has('sh_reg')){
            $newShipper = new Shipper();
            $newShipper->user_id = $user->id;
            if($request->has('email'))
                $newShipper->shipper_email = $request->get('email');

            if($request->has('firm'))
                $newShipper->shipper_firm = $request->get('firm');

            $newShipper->save();
        }//if

        if($request->has('car_reg')){

            $newCarrier = new Carrier();
            $newCarrier->user_id = $user->id;

            if($request->has('address'))
                $newCarrier->carrier_address = $request->get('address');

            $newCarrier->save();
        }//if
        try {
            $result = $user->sendVerificationCode($user);
        }catch (ValidationException $exception){
            return redirect()->back()->with(['error' => $exception->getMessage()]);
        }

    }//registered

    public function showShipperRegistrationForm()
    {
        return view('auth.shipper-register');
    }

    public function showCarrierRegistrationForm()
    {
        return view('auth.carrier-register');
    }
}
