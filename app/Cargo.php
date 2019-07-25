<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model {

    protected $table = 'cargo';

    public $timestamps = false;

    protected $fillable = [
        'length',
        'weight'
    ];

    public function shipper() {
        return $this->hasOne(Shipper::class, 'shipper_id', 'id');
    }

    public function shipping() {
        return $this->hasOne(Shipping::class, 'shipping_id', 'id');
    }

    public function cargoType() {
        return $this->hasOne(CargoType::class, 'type_id', 'id');
    }
}
