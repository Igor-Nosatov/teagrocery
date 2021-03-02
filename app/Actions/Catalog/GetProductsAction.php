<?php

declare(strict_types=1);

namespace App\Actions\Catalog;

use App\Repositories\Catalog\CatalogRepositoryInterface;
use Illuminate\Support\Facades\Auth;

final class GetProductsAction
{
    private $catalogRepository;

    public function __construct(CatalogRepositoryInterface $catalogRepository)
    {
        $this->catalogRepository = $catalogRepository;
    }

    public function execute($slug)
    {
        $sortField = request('sort_field', 'price');
        if (!in_array($sortField, ['name', 'price'])) {
            $sortField = 'price';
        }
        $sortDirection = request('sort_direction', 'desc');
        if (!in_array($sortDirection, ['asc', 'desc'])) {
            $sortDirection = 'asc';
        }

        return $this->catalogRepository->getProducts()->withFilters(
            request()->input('prices', []),
            request()->input('categories', []),
            request()->input('brands', [])
        )->orderBy($sortField, $sortDirection)
            ->with('brands')->has('brands')
            ->with('categories')->has('categories')
            ->with('types')->has('types')
            ->where('slug', $slug)
            ->paginate(8);
    }
}
