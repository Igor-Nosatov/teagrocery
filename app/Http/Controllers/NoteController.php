<?php

namespace App\Http\Controllers;
use App\Actions\Subscribe\SaveSubscribeAction;
use App\Entity\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
    private $saveSubscribe;

    public function __construct(SaveSubscribeAction $saveSubscribe)
    {
        $this->saveSubscribe = $saveSubscribe;
    }

    public function store(Request $request)
    {
        $note = new Note([
            'email' => $request->input('email'),
            'user_id' => Auth::id()
        ]);
        $note->save();
 
        return response()->json('The post successfully added');
    }
}
