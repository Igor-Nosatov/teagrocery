<?php
namespace App\Repositories\Contact;

use App\Entity\Contact;
use App\Repositories\Contact\ContactRepositoryInterface;

class ContactRepository  implements ContactRepositoryInterface
{
    public function saveContact(Contact $contact):Contact
    {
        $contact->save();
        return $contact;
    }
}

