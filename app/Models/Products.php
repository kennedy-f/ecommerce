<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
        'id',
        'category',
        'product_name',
        'description',
        'tiny_description',
        'image_url',
        'price',
        'priceof',
        'priceper',

    ];


}
