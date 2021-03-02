<?php
namespace App\Entity\UserTrait;

use App\Entity\Feedback;

trait Feedbacks
{
    public function feedbacks()
    {
        return $this->hasMany(Feedback::class);
    }
}