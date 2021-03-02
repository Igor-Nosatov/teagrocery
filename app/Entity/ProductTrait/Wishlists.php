<?php
namespace App\Entity\ProductTrait;

use App\Entity\Cart;

trait Wishlists
{
    public function wishlist()
    {
        return $this->hasMany(Cart::class);
    }
}