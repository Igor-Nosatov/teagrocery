<?php

declare (strict_types = 1);

namespace App\Actions\Product;

use App\Repositories\Product\ProductRepositoryInterface;

final class ProductShowAction
{
    private $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function execute($title)
    {
        return $this->productRepository->productShow()->with('brands')->has('brands')
        ->with('categories')->has('categories')
        ->where('title', $title)->first();
    }
}
