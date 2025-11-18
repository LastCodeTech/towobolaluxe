<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TowobolaluxeController extends Controller
{
    public function home(){
        return view('home');
    }
    public function testimonials(){
        return view('testimonials');
    }
    public function bookfittings(){
        return view('bookfittings');
    }
    public function lookBookFav(){
        return view('lookBookFav');
    }
    public function lookBook(){
        return view('lookBook');
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
}
