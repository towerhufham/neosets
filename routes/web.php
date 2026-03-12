<?php

use Illuminate\Support\Facades\Route;
use App\Models\Item;
use App\Models\Offer;

Route::get('/', function () {
    return view('pages.welcome');
});

Route::get('/home', function () {
    return view('pages.home', ['offers' => Offer::all()]);
})->middleware(('auth'));
