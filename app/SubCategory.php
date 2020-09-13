<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $fillable = ['titleAM','titleRU','titleEN', 'slug', 'category_id','posters'];

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function product(){
        return $this->hasMany('App\Product');}

    public function top(){
        return $this->hasMany('App\Top');}

}
