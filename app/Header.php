<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    protected $fillable = ['pageNameAM','pageNameRU','pageNameEN','page'];
}
