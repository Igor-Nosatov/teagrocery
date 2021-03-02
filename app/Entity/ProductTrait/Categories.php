<?php
namespace App\Entity\ProductTrait;

use App\Entity\Category;

trait Categories
{
    public function categories()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}