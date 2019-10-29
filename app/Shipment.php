<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    protected $fillable = [
        'name',
        'weight',
        'address',
        'lat',
        'long',
        'city',
        'status',
        'courier',
        'status_id',
        'user_id',
        'courier_id',
    ];

    function user()
    {
        return $this->belongsTo('App\User');
    }
    function status()
    {
        return $this->hasOne('App\ShipmentStatus','id','status_id');
    }

    function courier()
    {
        return $this->belongsTo('App\Courier');
    }

}


