<?php
namespace App\Entity\ProductTrait;

use App\Entity\Cart;

trait Carts
{
    public function carts()
    {
        return $this->hasMany(Cart::class);
    }
}