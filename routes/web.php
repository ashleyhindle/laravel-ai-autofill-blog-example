<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\MeetingNoteController;

Route::get('/', [ArticleController::class, 'index'])->name('articles.index');
Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');

Route::post('/meeting-notes', [MeetingNoteController::class, 'store'])->name('meeting-notes.store');
