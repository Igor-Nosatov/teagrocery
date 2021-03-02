<?php
namespace App\Repositories\Note;

use App\Entity\Note;

interface NoteRepositoryInterface
{
   public function saveNote(Note $subscribe):Note;
}