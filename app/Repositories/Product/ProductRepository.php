<?php

namespace App\Repositories\Product;

use App\Entity\Product;

class ProductRepository implements ProductRepositoryInterface
{
    public function productShow()
    {
        return Product::query();
    }
}
