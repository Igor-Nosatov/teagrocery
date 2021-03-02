<?php
namespace App\Repositories\Wishlist;

use App\Entity\Wishlist;
use Illuminate\Http\Request;

interface WishlistRepositoryInterface
{
     public function getProductWishlist();
     public function saveProductWishlist(Wishlist $wishlist):Wishlist;
     public function updateProductWishlist(Request $request, $id);
     public function getProductByIdWishlist(int $id);
     public function deleteProductWishlist(int $id): void;
}