<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Variation extends Model
{
    protected $fillable = [
        'size',
        'color',
        'image',
        'products_id',
    ];
}
