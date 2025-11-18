<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/testimonials',function(){
    return view('testimonials');
})->name('testimonials');

Route::get('/book fittings',function(){
    return view('bookfittings');
})->name('bookfittings');

Route::get('/look book',function(){
    return view('lookBook');
})->name('lookBook');
Route::get('/look book fav',function(){
    return view('lookBookFav');
})->name('lookBookFav');
Route::get('/about us',function(){
    return view('about');
})->name('about');
Route::get('/contact us',function(){
    return view('contact');
})->name('contact');

