<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\SubCategory;
use App\Brend;
use Laravel\Scout\Searchable;


class Product extends Model
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
        'user_id',
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
    //Anahit
    public function brend(){
        return $this->belongsTo('App\Brend','brend_id','user_id');
    }

    public function getSubCategory(){
        return $this->belongsTo('App\SubCategory','subcategory_id','id');
    }
  }
