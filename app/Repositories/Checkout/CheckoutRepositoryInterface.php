<?php
namespace App\Repositories\Checkout;

use App\Entity\Checkout;

interface CheckoutRepositoryInterface
{
    public function checkoutProduct(Checkout $checkout):Checkout;
}