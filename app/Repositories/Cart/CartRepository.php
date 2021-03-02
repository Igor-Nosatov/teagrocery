<?php
namespace App\Repositories\Cart;

use App\Entity\Cart;
use App\Repositories\Cart\CartRepositoryInterface;
use Illuminate\Http\Request;

class CartRepository implements CartRepositoryInterface
{
    public function getProductCart()
    {
        return Cart::query();
    }

    public function saveProductCart(Cart $cart):Cart
    {
        $cart->save();
        return $cart;
    }

    public function updateProductCart(Request $request, $id)
    {
        $cart = Cart::find($id);
        $cart->update($request->only(['quantity']));
    }

    public function getProductByIdCart(int $id)
    {
        return Cart::find($id);
    }

    public function deleteProductCart(int $id): void
    {
        Cart::destroy($id);
    }
}
