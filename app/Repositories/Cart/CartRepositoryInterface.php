<?php

namespace App\Repositories\Cart;

use App\Entity\Cart;
use Illuminate\Http\Request;

interface CartRepositoryInterface
{
    public function getProductCart();
    public function saveProductCart(Cart $cart):Cart;
    public function updateProductCart(Request $request, $id);
    public function getProductByIdCart(int $id);
    public function deleteProductCart(int $id): void;
}
