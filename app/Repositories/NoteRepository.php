<?php

namespace App\Repositories;

use App\Contracts\NoteRepositoryInterface;
use App\Models\Note;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;

class NoteRepository implements NoteRepositoryInterface
{
   
    public function createNote(array $data): ?Note
    {
        return Note::create($data);
    }

    public function getAll(): ?Collection
    {
        return Note::get();
    }

    public function deleteItem(Note $note)
    {
        return $note->delete();
    }
}
