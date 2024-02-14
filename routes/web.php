<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NoteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [AuthController::class, 'getHomePage'])->name('home');

Route::name('note.')->group(function () {
    Route::get('/note/create', [NoteController::class, 'getCreateNotePage'])->name('create.page');
    Route::post('/note/add', [NoteController::class, 'addNote'])->name('add');
    Route::get('/notes', [NoteController::class, 'getNoteListPage'])->name('list');
    Route::delete('/note/{noteId:id}', [NoteController::class, 'deleteNote'])->name('delete');
});

