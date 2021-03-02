<?php

declare (strict_types = 1);

namespace App\Actions\Subscribe;

use App\Entity\Note;
use Illuminate\Http\Request;
use App\Repositories\Note\NoteRepositoryInterface;
use Illuminate\Support\Facades\Auth;

final class SaveSubscribeAction
{
    private $subscribeRepository;

    public function __construct(NoteRepositoryInterface $subscribeRepository)
    {
        $this->subscribeRepository = $subscribeRepository;
    }

    public function execute(Request $request)
    {   
      $subscribe = new Note();
      $subscribe->email = $request->input('email');
      $subscribe->user_id = Auth::id();
      return $this->subscribeRepository->saveNote($subscribe);
    }
} 
