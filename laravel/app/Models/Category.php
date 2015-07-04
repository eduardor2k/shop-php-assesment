<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * This method returns the category given the code identifier
     *
     * @param $code
     * @return mixed
     */
    protected function getByCode($code)
    {
        return self::where('code',$code)->get();
    }
}
