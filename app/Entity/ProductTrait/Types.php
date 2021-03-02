<?php
namespace App\Entity\ProductTrait;

use App\Entity\Type;

trait Types
{
    public function types()
    {
        return $this->belongsTo(Type::class, 'type_id');
    }
}