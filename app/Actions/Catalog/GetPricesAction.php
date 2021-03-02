<?php

declare (strict_types = 1);

namespace App\Actions\Catalog;
use App\Services\PriceService;

final class GetPricesAction
{
    public function execute(PriceService $priceService)
    {
        return $priceService->getPrices(
            request()->input('prices', []),
            request()->input('categories', []),
            request()->input('brands', [])
        );
    }
}
