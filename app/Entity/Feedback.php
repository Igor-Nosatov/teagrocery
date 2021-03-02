<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = 'feedbacks';

    protected $fillable = [
        'star', 'name', 'email', 'phone', 'message', 'user_id', 'product_id'
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function products()
    {
        return $this->belongsTo(product::class, 'product_id');
    }
}
