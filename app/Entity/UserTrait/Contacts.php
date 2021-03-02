<?php
namespace App\Entity\UserTrait;

use App\Entity\Contact;

trait Contacts
{
    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }
}