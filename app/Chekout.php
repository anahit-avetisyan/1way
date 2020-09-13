<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chekout extends Model
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
        'city',
        'address',
        'name',
        'surname',
        'phone',
        'sale',
        'size',
        'finalPrice',
        'priceAM',
        'priceRU',
        'priceEN',
        'posters',
        'user_id',
        'category_id',];

}
