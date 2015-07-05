<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function products()
    {
        return $this->belongsToMany('App\Models\Product');
    }

    /**
     * Inserts an order
     *
     * @param array $data
     * @param integer $total
     * @return integer
     */
    public static function addOrder($data,$total,$products)
    {
        $order = new self();
        $order->first_name = $data['first_name'];
        $order->last_name = $data['last_name'];
        $order->email = $data['email'];
        $order->telephone = $data['telephone'];
        $order->street_name = $data['street_name'];
        $order->city = $data['city'];
        $order->country = $data['country'];
        $order->zipcode = $data['zipcode'];
        $order->amount = $total;
        $order->save();

        foreach($products as $product)
        {
            $order->products()->save($product->product,['quantity' => $product->qty]);
        }

        return $order->id;
    }
}
