<?php
namespace App\Entity\ProductTrait;
use App\Entity\Brand;
trait Brands
{
    public function brands()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }
}