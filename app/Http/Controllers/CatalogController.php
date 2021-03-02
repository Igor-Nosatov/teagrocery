<?php

namespace App\Http\Controllers;

use App\Actions\Catalog\GetBrandsAction;
use App\Actions\Catalog\GetCategoriesAction;
use App\Actions\Catalog\GetPricesAction;
use App\Actions\Catalog\GetProductsAction;
use App\Services\PriceService;

class CatalogController extends Controller
{
    private $getProducts;
    private $getPrices;
    private $getCategories;
    private $getBrands;

    public function __construct(
        GetProductsAction $getProducts,
        GetPricesAction $getPrices,
        GetCategoriesAction $getCategories,
        GetBrandsAction $getBrands
        )
    {
        $this->getProducts = $getProducts;
        $this->getPrices = $getPrices;
        $this->getCategories = $getCategories;
        $this->getBrands = $getBrands;
    }

   public function show($slug, PriceService $priceService){
    $data['products'] = $this->getProducts->execute($slug);
    $data['categories'] = $this->getCategories->execute($slug);
    $data['brands'] = $this->getBrands->execute($slug);
    $data['prices']  = $this->getPrices->execute($priceService);
    return response()->json($data, 200);
   }
}



