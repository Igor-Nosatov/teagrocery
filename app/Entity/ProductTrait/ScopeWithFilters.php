<?php
namespace App\Entity\ProductTrait;

trait ScopeWithFilters
{
    public function scopeWithFilters(
        $query,
        $prices,
        $categories,
        $brands
    ) {
        return $query->when(count((array) $categories), function ($query) use ($categories) {
            $query->whereIn('category_id', $categories);
        })
            ->when(count((array) $brands), function ($query) use ($brands) {
                $query->whereIn('brand_id', $brands);
            })
            ->when(request('search', '') != '', function ($query) {
                $query->where('name', 'LIKE', '%' . request('search') . '%');
            })
            ->when(request('custom_search', '') != '', function ($query) {
                $query->where(function ($q) {
                    $q->where('name', 'LIKE', '%' . request('custom_search') . '%')
                        ->orWhere('description', 'LIKE', '%' . request('custom_search') . '%');
                });
            })
            ->when(count((array) $prices), function ($query) use ($prices) {
                $query->where(function ($query) use ($prices) {
                    $query->when(in_array(0, $prices), function ($query) {
                        $query->orWhere('price', '<', '15');
                    })
                        ->when(in_array(1, $prices), function ($query) {
                            $query->orWhereBetween('price', ['15', '20']);
                        })
                        ->when(in_array(2, $prices), function ($query) {
                            $query->orWhereBetween('price', ['20', '30']);
                        })
                        ->when(in_array(3, $prices), function ($query) {
                            $query->orWhere('price', '>', '30');
                        });
                });
            });
    }
}