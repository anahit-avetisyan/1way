<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['titleAM','titleRU','titleEN','posters'];

    public function subcategory(){
        return $this->hasMany('App\SubCategory');}

    public function product(){
        return $this->hasMany('App\Product');}

    public static function rules(){
        return ['title' => 'required|max:255|min:3'];}
}
