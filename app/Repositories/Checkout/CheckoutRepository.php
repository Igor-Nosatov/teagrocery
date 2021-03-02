<?php
namespace App\Repositories\Checkout;

use App\Entity\Checkout;

final class CheckoutRepository implements CheckoutRepositoryInterface
{
    public function checkoutProduct(Checkout $checkout):Checkout
    {
        $checkout->save();
        return $checkout;
    }
}