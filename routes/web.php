<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'index');

Route::get('dashboard', [App\Http\Controllers\PageController::class, 'dashboard'])
    ->middleware('auth:sanctum')
    ->name('dashboard');

Route::resource('notes', App\Http\Controllers\NoteController::class)
    ->middleware('auth:sanctum');
