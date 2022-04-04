<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HebrewsController;
Route::get('/', [HebrewsController::class, 'index']);
Route::get('/chapter/{chapter_number}', [HebrewsController::class, "readByChapter"]);
Route::get('/all-chapters', [HebrewsController::class, 'readAllChapters']);