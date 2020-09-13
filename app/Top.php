<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Top extends Model
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
        'priceAM',
        'priceRU',
        'priceEN',
        'curse',
        'posters',
        'product_id',
        'subcategory_id',
        'category_id',
        'brend_id',];
    public function subcategory(){
        return $this->belongsTo('App\SubCategory');
    }
    public function category(){
        return $this->belongsTo('App\Category');
    }
    public function brand(){
        return $this->belongsTo('App\Brend');
    }
}
