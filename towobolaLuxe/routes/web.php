<?php

use App\Http\Controllers\Auth;
use App\Http\Controllers\TowobolaluxeController;
use Illuminate\Support\Facades\Route;

Route::get('/',[TowobolaluxeController::class,'home'])->name('home');
Route::get('/testimonials',[TowobolaluxeController::class,'testimonials'])->name('testimonials');
Route::get('/practice',[TowobolaluxeController::class,'practice'])->name('practice');
Route::get('/book fittings',[TowobolaluxeController::class,'bookfittings'])->name('bookfittings');
// Route::get('/book fittings',[TowobolaluxeController::class,'bookfittings'])->name('bookfittings');
Route::get('/look Book',[TowobolaluxeController::class,'lookBookFav'])->name('lookBookFav');
Route::get('/look book fav',[TowobolaluxeController::class,'lookBook'])->name('lookBook');
Route::get('/about us',[TowobolaluxeController::class,'about'])->name('about');
Route::get('/contact us',[TowobolaluxeController::class,'contact'])->name('contact');
Route::get('/login',[Auth::class,'login'])->name('login');
Route::get('/dashboard',[TowobolaluxeController::class,'dashboard'])->name('dashboard');
Route::get('/edit collection',[TowobolaluxeController::class,'editcollection'])->name('editcollection');
Route::get('/edit testimonials',[TowobolaluxeController::class,'edittestimonials'])->name('edittestimonials');
Route::post('/logout',[TowobolaluxeController::class,'logout'])->name('logout');
Route::get('/testimonials management',[TowobolaluxeController::class,'testimonialsmng'])->name('testimonialsmng');
Route::get('/addcategory',[TowobolaluxeController::class,'addcategory'])->name('addcategory');
Route::get('/editcategory/{id}',[TowobolaluxeController::class,'editcategory'])->name('editcategory');
Route::post('/login',[TowobolaluxeController::class,'loginProcess'])->name('loginProcess');
Route::post('/createCategory',[TowobolaluxeController::class,'createCategory'])->name('createCategory');
Route::put('/update Category/{id}',[TowobolaluxeController::class,'updateCategory'])->name('updateCategory');


