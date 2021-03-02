<?php

declare (strict_types = 1);

namespace App\Actions\Cart;
use Illuminate\Http\Request;
use App\Repositories\Cart\CartRepositoryInterface;

final class UpdateCartAction
{
    private $cartRepository;

    public function __construct(CartRepositoryInterface $cartRepository)
    {
        $this->cartRepository = $cartRepository;
    }

    public function execute(Request $request, $id)
    {
        return $this->cartRepository->updateProductCart($request, $id);
    }
}
