<?php
namespace App\Entity\UserTrait;

use App\Entity\Checkout;

trait CheckoutItems
{
    public function checkoutItems()
    {
        return $this->hasMany(Checkout::class);
    }
}