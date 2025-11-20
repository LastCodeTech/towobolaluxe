<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth as FacadesAuth;

class Auth extends Controller
{
    public function login(){
        return view('login');
    }

//   public function loginProcess(Request $request){
//         $validate=$request->validate([
//             'email'=>'required|email',
//             'password'=>'string|min:5|required'
//         ]);
//         if(A::attempt($validate)){
//             return redirect()->route('home');
//         }
//         else{
//              return redirect()->route('login');
//         }
//     }
}
