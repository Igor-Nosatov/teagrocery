<?php

declare (strict_types = 1);

namespace App\Actions\Cart;
use App\Repositories\Cart\CartRepositoryInterface;

final class DeleteCartAction
{
    private $cartRepository;

    public function __construct(CartRepositoryInterface $cartRepository)
    {
        $this->cartRepository = $cartRepository;
    }

    public function execute(int $id): void
    {
        $cart = $this->cartRepository->getProductByIdCart($id);
        $cart->delete();
    }
}
