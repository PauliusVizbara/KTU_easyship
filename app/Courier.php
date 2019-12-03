<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courier extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
    ];

    function shipments(){
        return $this->hasMany('App\Shipment');
    }
}
