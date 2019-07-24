<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrier extends Model
{
    protected $table = 'carriers';
    public $timestamps = false;

    public function user()
    {
        return $this->hasOne(User::class, 'user_id', 'id');
    }

}
