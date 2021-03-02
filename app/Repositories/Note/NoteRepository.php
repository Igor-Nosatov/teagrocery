<?php
namespace App\Repositories\Note;
use App\Entity\Note;

class NoteRepository  implements NoteRepositoryInterface 
{
    public function saveNote(Note $subscribe):Note
    {
       $subscribe->save();
       return $subscribe;
    }
}