<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class SocialAuth extends Model
{
    protected $table = 'social_providers';

    protected $guarded = ['id'];

    protected $hidden = [
        'access_token', 'refresh_token',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
