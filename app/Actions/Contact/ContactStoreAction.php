<?php

declare (strict_types = 1);

namespace App\Actions\Contact;

use App\Entity\Contact;
use App\Repositories\Contact\ContactRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

final class ContactStoreAction
{
    private $contactRepository;

    public function __construct(ContactRepositoryInterface $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    } 

    public function execute(Request $request)
    {
        $contact = new Contact();
        $contact->first_name = $request->input('first_name');
        $contact->last_name = $request->input('last_name');
        $contact->email = $request->input('email');
        $contact->thema = $request->input('thema');
        $contact->message = $request->input('message');
        $contact->user_id = Auth::id();
        return $this->contactRepository->saveContact($contact);
    }
}
