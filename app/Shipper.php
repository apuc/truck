<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipper extends Model
{
    protected $table = 'shippers';

    public $timestamps = false;

    public function user()
    {
        return $this->hasOne(User::class, 'user_id', 'id');
    }

}
