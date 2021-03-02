<?php

declare (strict_types = 1);

namespace App\Actions\Catalog;

use App\Repositories\Catalog\CatalogRepositoryInterface;
use Illuminate\Support\Facades\Auth;

final class GetBrandsAction
{
    private $catalogRepository;

    public function __construct(CatalogRepositoryInterface $catalogRepository)
    {
        $this->catalogRepository = $catalogRepository;
    }

    public function execute($slug)
    {
        return $this->catalogRepository->getBrands()->withCount(['products' => function ($query) {
            $query->withFilters(
                request()->input('prices', []),
                request()->input('categories', []),
                request()->input('brands', [])
            );
        }])->where('slug', $slug)->get();
    }
}
