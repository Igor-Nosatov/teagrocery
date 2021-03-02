<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'name',
        'slug',
        'type_id'
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
