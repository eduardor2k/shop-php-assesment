<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    /**
     * Returns a Coupon by Code
     *
     * @param $name
     * @return mixed
     */
    public static function findByCode($name)
    {
        return self::where('code',$name)->first();
    }
}
