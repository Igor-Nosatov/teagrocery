<?php

declare(strict_types=1);

namespace App\Actions\Wishlist;

use App\Repositories\Wishlist\WishlistRepositoryInterface;
use Illuminate\Support\Facades\Auth;

final class GetWishlistAction
{
    private $wishlistRepository;

    public function __construct(WishlistRepositoryInterface $wishlistRepository)
    {
        $this->wishlistRepository = $wishlistRepository;
    }

    public function execute()
    {
        return $this->wishlistRepository
            ->getProductWishlist()
            ->where('user_id', Auth::id())
            ->with('products')->has('products')
            ->get();
    }
}
