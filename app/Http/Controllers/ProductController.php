<?php

namespace App\Http\Controllers;

use App\Entity\Product;
use App\Actions\Product\ProductShowAction;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $productShow;

    public function __construct( ProductShowAction $productShow)
    {
        $this->productShow = $productShow;
    }

    public function show($title){
        $data['product'] =  $this->productShow->execute($title);
        return response()->json($data, 200);
    }
}
