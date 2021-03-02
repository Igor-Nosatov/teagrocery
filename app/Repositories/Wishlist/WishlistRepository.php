<?php

namespace App\Repositories\Wishlist;

use App\Repositories\Wishlist\WishlistRepositoryInterface;
use App\Entity\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistRepository implements WishlistRepositoryInterface
{
    public function getProductWishlist()
    {
        return Wishlist::query();
    }
    
    public function saveProductWishlist(Wishlist $wishlist):Wishlist
    {
        $wishlist->save();
        return $wishlist;
    }

    public function updateProductWishlist(Request $request, $id)
    {
        $wishlist = Wishlist::find($id);
        $wishlist->update($request->only(['quantity']));
    }
    
    public function getProductByIdWishlist(int $id)
    {
        return Wishlist::find($id);
    }

    public function deleteProductWishlist(int $id): void
    {
       Wishlist::destroy($id);
    }
}


