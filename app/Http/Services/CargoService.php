<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 25.07.2019
 * Time: 10:37
 */

namespace App\Http\Services;


use App\Cargo;
use App\CargoType;
use App\Shipper;
use App\Shipping;

class CargoService extends Service {

    public static function store($data){
        $instance = new Cargo([
            'length' => $data['length'],
            'weight' => $data['weight'],
        ]);

        $type = CargoType::find($data['type']);
        $shipper = Shipper::find($data['shipper']);
        $shipping = Shipping::find($data['shipping']);

        $instance->save([$type, $shipper, $shipping]);
    }
}