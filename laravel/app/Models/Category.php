<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function products()
    {
        return $this->belongsToMany('App\Models\Product');
    }

    /**
     * This method returns the category given the code identifier
     *
     * @param $code
     * @return mixed
     */
    protected function getByCode($code)
    {
        return self::where('code',$code)->first();
    }
}
