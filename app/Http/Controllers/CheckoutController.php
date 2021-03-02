<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actions\Checkout\CheckoutAction;

class CheckoutController extends Controller
{
    private $makeCheckout;

    public function __construct(CheckoutAction $makeCheckout)
    {
        $this->makeCheckout = $makeCheckout;
    }

    public function store(Request $request)
    {
        return $this->makeCheckout->execute($request);
    }
}
