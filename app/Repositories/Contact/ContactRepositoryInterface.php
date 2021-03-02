<?php
namespace App\Repositories\Contact;

use App\Entity\Contact;

interface ContactRepositoryInterface
{
  public function saveContact(Contact $contact):Contact;
}