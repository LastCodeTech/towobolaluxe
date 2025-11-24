<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Towobolaluxe;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Auth as SupportFacadesAuth;

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
        $categories=category::all();

        // dd($categories);
        return view('dashboard',compact('categories'));
    }

    public function testimonialsmng(){
        return view('testimonialsmng');
    }
    public function practice(){
        return view('practice');
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
        $categories=category::all();
        return view('addcategory',compact('categories'));
     }
     public function editcategory($id)
{
    $category = Category::findOrFail($id);

    return view('editcategory', compact('category'));
}


     public function updateCategory(Request $request, $id)
{
    $validate = $request->validate([
        'name' => 'required|string|unique:categories,name,' . $id
    ]);

    $category = Category::findOrFail($id);
    $category->update($validate);

    return redirect()->route('addcategory')->with('message', 'Category updated!');
}


     public function createCategory(Request $request){
        $validate=$request->validate([
          'name' => 'required|string|unique:categories,name'
        ]);
        $yes=category::create($validate);
        if($yes){
            return redirect()->route('dashboard')->with('message','category added successfully!!!');
        }
         return redirect()->route('addcategory')->with('message','an error occurred !!!');
     }
     
     public function deleteCategory($id){

       $yes = category::findOrFail($id);
       $yes->delete();
       return redirect()->route('addcategory');
     }
    
   
}
