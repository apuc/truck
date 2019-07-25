<?php

namespace App\Http\Controllers;

use App\CargoType;
use App\Http\Services\CargoService;
use App\Shipper;
use App\Shipping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class CargoController extends Controller
{

    public function index() {

    }


    public function create(Request $request) {
        if(!$request->has('shipping')){
            abort(404);
        }
        $shipping = Shipping::findOrFail($request->get('shipping'));
        $shippers = Shipper::all()->toArray();
        $types = CargoType::all()->toArray();
        return view('cargo._form', compact(['shipping', 'shippers', 'types']));
    }


    public function store(Request $request){
        CargoService::store($request->all());
    }


}
