<?php
namespace App\Entity\UserTrait;

use App\Entity\Note;

trait Notes
{
    public function notes()
    {
        return $this->hasMany(Note::class);
    }
}