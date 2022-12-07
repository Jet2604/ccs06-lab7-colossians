<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ColossiansCotroller;

Route::get('/chapter/{chapter_number}', [ColossiansCotroller::class, 'readByChapter']);
Route::get('/all-chapters', [ColossiansCotroller::class, 'readAll']);