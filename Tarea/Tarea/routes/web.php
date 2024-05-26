<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('notes', NoteController::class);
Route::resource('users', UserController::class);
Route::get('/notes', 'NoteController@index');
Route::get('/notes', [NoteController::class, 'index'])->name('notes.index');
Route::get('/notes/create', 'NoteController@create');