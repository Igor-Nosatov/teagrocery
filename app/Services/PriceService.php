<?php

namespace App\Services;

use App\Entity\Product;


class PriceService
{
    private $prices;
    private $categories;
    private $brands;

    public function getPrices($prices, $categories, $brands, $slug)
    {
        $this->prices = $prices;
        $this->categories = $categories;
        $this->brands = $brands;
        $formattedPrices = [];

        foreach(Product::PRICES as $index => $name) {
            $formattedPrices[] = [
                'name' => $name,
                'products_count' => $this->getProductCount($index, $slug)
            ];
        }

        return $formattedPrices;
    }

    private function getProductCount($index, $slug)
    {
        return Product::withFilters($this->prices, $this->categories, $this->brands)
            ->when($index == 0, function ($query) {
                $query->where('price', '<', '15');
            })
            ->when($index == 1, function ($query) {
                $query->whereBetween('price', ['15', '20']);
            })
            ->when($index == 2, function ($query) {
                $query->whereBetween('price', ['20', '30']);
            })
            ->when($index == 3, function ($query) {
                $query->where('price', '>', '30');
            })
            ->where('slug', $slug)
            ->count();
    }
}
