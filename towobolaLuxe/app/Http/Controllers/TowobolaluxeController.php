<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    Public function login(){
        return view('login');
    }

    public function loginProcess(Request $request){
        $validate=$request->validate([
            'email'=>'required|email',
            'password'=>'string|min:5|required'
        ]);
        if(Auth::attempt($validate)){
            return redirect()->route('dashboard');
        }
        else{
             return redirect()->route('login')->with('message','email or password is incorrect');
        }
    }
    public function dashboard(){
        return view('dashboard');
    }

    public function testimonialsmng(){
        return view('testimonialsmng');
    }

    public function editcollection(){
        return view('editcollection');
    }

    public function edittestimonials(){
        return view('edittestimonials');
    }
     public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        return redirect()->route('home');
     }

     public function addcategory(){
        return view('addcategory');
     }
   
}
