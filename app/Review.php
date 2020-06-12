<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'date',
        'rating',
        'name',
        'email',
        'review',
        'products_id',
    ];
}
