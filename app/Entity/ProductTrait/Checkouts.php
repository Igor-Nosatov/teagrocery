<?php
namespace App\Entity\ProductTrait;

use App\Entity\Checkout;

trait Checkouts
{
    public function checkouts()
    {
        return $this->hasMany(Checkout::class);
    }
}