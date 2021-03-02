<?php

declare(strict_types=1);

namespace App\Actions\Checkout;

use App\Entity\Cart;
use App\Entity\Checkout;
use App\Entity\Wishlist;
use Illuminate\Http\Request;
use App\Repositories\Checkout\CheckoutRepositoryInterface;
use Illuminate\Support\Facades\Auth;

final class CheckoutAction 
{
    private $checkoutRepository;

    public function __construct(CheckoutRepositoryInterface $checkoutRepository)
    {
        $this->checkoutRepository = $checkoutRepository;
    }

    public function execute(Request $request)
    {
        $cart = Cart::where('user_id', Auth::id())->get();
        $checkout = new Checkout();
        $checkout->first_name = $request->input('first_name');
        $checkout->phone = $request->input('phone');
        $checkout->email = $request->input('email');
        $checkout->client_receiver = $request->input('client_receiver');
        $checkout->phone_receiver = $request->input('phone_receiver');
        $checkout->delivery = $request->input('delivery');
        $checkout->city = $request->input('city');
        $checkout->street = $request->input('street');
        $checkout->house = $request->input('house');
        $checkout->floor = $request->input('floor');
        $checkout->apartment = $request->input('apartment');
        $checkout->payment_type = $request->input('payment_type');
        $checkout->comment = $request->input('comment');
        $checkout->user_id = Auth::id();
        $checkout->user_order = json_encode($cart);
        Cart::where('user_id', Auth::id())->delete();
        Wishlist::where('user_id', Auth::id())->delete();
        return $this->checkoutRepository->checkoutProduct($checkout);
    }
}
