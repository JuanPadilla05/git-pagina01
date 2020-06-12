<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    protected $fillable = [
        'recipient_name',
        'dni',
        'address',
        'date_delivery',
        'order_id',
    ];
}
