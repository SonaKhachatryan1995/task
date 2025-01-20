<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[App\Http\Controllers\PagesController::class, 'main'])->name('dashboard');

Route::get('screen-1', [App\Http\Controllers\PagesController::class, 'screen1'])->name('screen-1');
Route::get('screen-2', [App\Http\Controllers\PagesController::class, 'screen2'])->name('screen-2');
Route::get('screen-3', [App\Http\Controllers\PagesController::class, 'screen3'])->name('screen-3');
