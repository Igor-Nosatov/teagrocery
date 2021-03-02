<?php
namespace App\Entity\UserTrait;

use App\Entity\Wishlist;

trait WishlistItems
{
    public function wishlistItems()
    {
        return $this->hasMany(Wishlist::class);
    }
}