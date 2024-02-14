<?php

namespace App\Services;

use App\Contracts\NoteRepositoryInterface;
use App\Contracts\NoteServiceInterface;
use App\Models\Note;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;

class NoteService implements NoteServiceInterface
{
    public function __construct(
        protected NoteRepositoryInterface $noteRepository
    ) {
    }

   
    public function createNote(array $data): ?Note
    {
        return $this->noteRepository->createNote($data);
    }

    public function getAll(): ?Collection
    {
        return $this->noteRepository->getAll();
    }


    public function deleteItem(Note $note)
    {
        if ($note === null) {
            return false;
        }

        return $this->noteRepository->deleteItem($note);
    }
    
}
