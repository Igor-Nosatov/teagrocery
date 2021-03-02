<?php

declare (strict_types = 1);

namespace App\Actions\Cart;

use App\Repositories\Cart\CartRepositoryInterface;
use Illuminate\Support\Facades\Auth;

final class GetCartAction
{
    private $cartRepository;

    public function __construct(CartRepositoryInterface $cartRepository)
    {
        $this->cartRepository = $cartRepository;
    }

    public function execute()
    {
        $id = Auth::id();
        return $this->cartRepository
            ->getProductCart()
            ->where('user_id', $id)
            ->with('products')
            ->has('products')
            ->get();
    }
}
