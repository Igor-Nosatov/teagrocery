<?php
namespace App\Entity\UserTrait;

use App\Entity\Cart;

trait CartItems
{
    public function cartItems()
    {
        return $this->hasMany(Cart::class);
    }
}