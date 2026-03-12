<?php

use Illuminate\Support\Facades\Route;
use App\Models\Item;

Route::get('/', function () {
    return view('pages.welcome');
});

Route::get('/home', function () {
    return view('pages.home', ['items' => Item::all()]);
})->middleware(('auth'));
