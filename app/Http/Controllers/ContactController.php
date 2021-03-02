<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actions\Contact\ContactStoreAction;

class ContactController extends Controller
{
    private $saveContact;

    public function __construct(ContactStoreAction $saveContact)
    {
        $this->saveContact = $saveContact;
    }

    public function store(Request $request)
    {
       return $this->saveContact->execute($request);
    }
}
