<?php

namespace App\Repositories\Catalog;

use App\Entity\Brand;
use App\Entity\Category;
use App\Entity\Producer;
use App\Entity\Product;
use App\Repositories\Catalog\CatalogRepositoryInterface;

class CatalogRepository  implements CatalogRepositoryInterface
{
    public function getProducts()
    {
        return Product::query();
    }
    public function getCategories()
    {
        return Category::query();
    }
    public function getBrands()
    {
        return Brand::query();
    }
}
