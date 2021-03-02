<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'brands';

    protected $fillable = [
        'name',
        'slug',
        'type_id',

    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
