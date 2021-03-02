<?php

namespace App\Http\Controllers;

use App\Actions\Home\GetProductDataAction;

class HomeController extends Controller
{
    private $getProductData;

    public function __construct(GetProductDataAction $getProductData)
    {
        $this->getProductData = $getProductData;
    }

    public function app()
    {
        return view('app');
    }

    public function index()
    {
        $data = $this->getProductData->execute();
        return response()->json($data, 200);
    }
}
