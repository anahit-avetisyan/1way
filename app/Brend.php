<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brend extends Model
    {
    protected $fillable = ['title','user_id','posters'];

    public function product(){
        return $this->hasMany('App\Product');}

    public function top(){
        return $this->hasMany('App\Top');}
}
