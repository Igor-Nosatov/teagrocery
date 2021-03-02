<?php
namespace App\Entity\ProductTrait;

use App\Entity\Feedback;

trait Feedbacks
{
    public function feedbacks()
    {
        return $this->hasMany(Feedback::class);
    }
}