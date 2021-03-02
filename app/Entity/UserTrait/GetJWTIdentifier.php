<?php
namespace App\Entity\UserTrait;

trait GetJWTIdentifier
{
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }
}