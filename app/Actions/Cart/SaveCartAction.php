<?php

declare (strict_types = 1);

namespace App\Actions\Cart;

use App\Entity\Cart;
use Illuminate\Http\Request;
use App\Repositories\Cart\CartRepositoryInterface;
use Illuminate\Support\Facades\Auth;

final class SaveCartAction
{
    private $cartRepository;

    public function __construct(CartRepositoryInterface $cartRepository)
    {
        $this->cartRepository = $cartRepository;
    }

    public function execute(Request $request)
    {
        $cart = new Cart();
        $cart->quantity = $request->input('quantity');
        $cart->product_id = $request->input('product_id');
        $cart->user_id = Auth::id();
        return $this->cartRepository->saveProductCart($cart);
    }
}
