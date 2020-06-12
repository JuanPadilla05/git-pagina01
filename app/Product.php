<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'brand',
        'model',
        'description',
        'quantity',
        'price',
        'previous_price',
        'discount',
        'image',
        'availability',
        'provider_id',
        'category_id',
    ];
}
