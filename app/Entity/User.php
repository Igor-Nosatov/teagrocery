<?php

namespace App\Entity;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable;

    use UserTrait\CartItems;
    use UserTrait\CheckoutItems;
    use UserTrait\Contacts;
    use UserTrait\Feedbacks;
    use UserTrait\GetJWTCustomClaims;
    use UserTrait\GetJWTIdentifier;
    use UserTrait\Notes;
    use UserTrait\WishlistItems;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

}
