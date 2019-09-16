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
    ];
}
