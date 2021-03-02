<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    protected $table = 'checkouts';

    protected $fillable = [
        'first_name',
        'phone',
        'email',
        'client_receiver',
        'phone_receiver',
        'delivery',
        'city',
        'street',
        'house',
        'floor',
        'apartment',
        'payment_type',
        'comment',
         'user_id',
         'user_order',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
