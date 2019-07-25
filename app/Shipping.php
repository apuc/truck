<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipping extends Model {

    protected $table = 'shipping';

    public function cargoes(){
        $this->hasMany(Cargo::class, 'shipping_id', 'id');
    }

}
