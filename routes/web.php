<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('legal.index');
});

Auth::routes();

Route::get('/home', function () {
    return view('legal.index');
})->name('home');

// Legal Section
Route::get('/legal', function () {
    return view('legal.index');
})->name('legal');

// HR Solutions Section
Route::get('/hr', function () {
    return view('hr.index');
})->name('hr');
