<?php

declare (strict_types = 1);

namespace App\Actions\Wishlist;
use Illuminate\Http\Request;
use App\Repositories\Wishlist\WishlistRepositoryInterface;

final class UpdateWishlistAction
{
    private $wishlistRepository;

    public function __construct(WishlistRepositoryInterface $wishlistRepository)
    {
        $this->wishlistRepository = $wishlistRepository;
    }

    public function execute(Request $request, $id)
    {
        return $this->wishlistRepository->updateProductWishlist($request, $id);
    }
}
