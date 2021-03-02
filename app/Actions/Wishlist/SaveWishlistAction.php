<?php

declare (strict_types = 1);

namespace App\Actions\Wishlist;

use App\Entity\Wishlist;
use Illuminate\Http\Request;
use App\Repositories\Wishlist\WishlistRepositoryInterface;
use Illuminate\Support\Facades\Auth;

final class SaveWishlistAction
{
    private $wishlistRepository;

    public function __construct(WishlistRepositoryInterface $wishlistRepository)
    {
        $this->wishlistRepository = $wishlistRepository;
    }

    public function execute(Request $request)
    {
        $wishlist = new Wishlist();
        $wishlist->quantity = $request->input('quantity');
        $wishlist->product_id = $request->input('product_id');
        $wishlist->user_id = Auth::id();
        return $this->wishlistRepository->saveProductWishlist($wishlist);
    }
}