<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShipmentStatus extends Model
{
    protected $fillable = [
        'name',
    ];

    function shipments(){
        return $this->hasmany('App\Shipment', 'status_id', 'id');
    }

}
