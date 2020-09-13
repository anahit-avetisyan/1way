<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    protected $fillable = [
        'titleAM',
        'titleRU',
        'titleEN',
        'availability',
        'quantity',
        'descriptionAM',
        'descriptionRU',
        'descriptionEN',
        'code',
        'color',
        'sale',
        'size',
        'finalPrice',
        'priceAM',
        'priceRU',
        'priceEN',
        'posters',
        'user_id',
        'product_id',
        'category_id',];

}

