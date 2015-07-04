<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $table = 'inventory';

    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }
}
