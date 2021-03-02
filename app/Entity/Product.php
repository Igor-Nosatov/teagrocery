<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use ProductTrait\Brands;
    use ProductTrait\Carts;
    use ProductTrait\Categories;
    use ProductTrait\Checkouts;
    use ProductTrait\Feedbacks;
    use ProductTrait\ScopeWithFilters;
    use ProductTrait\Types;
    use ProductTrait\Wishlists;
    
    protected $table = 'products';
    protected $fillable = [
        'name',
        'title',
        'code',
        'price',
        'img_url',
        'description',
        'slug',
        'type_id',
        'brand_id',
        'category_id',
    ];

    const PRICES = [
        'Меньше чем 15 лей',
        'От 15 до 20 лей',
        'От 20 до 30 лей',
        'Больше чем 30 лей',
    ];

}
