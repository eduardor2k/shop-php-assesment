<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function categories()
    {
        return $this->belongsToMany('App\Models\Category');
    }

    public function pictures()
    {
        return $this->hasMany('App\Models\ProductPictures');
    }

}
