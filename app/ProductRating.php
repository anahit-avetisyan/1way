<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductRating extends Model
{
    protected $fillable = ['id', 'product_id', 'rate'];


    public function product()
    {
        return $this->belongsTo('App\Product', 'product_id', 'id');
    }
}
