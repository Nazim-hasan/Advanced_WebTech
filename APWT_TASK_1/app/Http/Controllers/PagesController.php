<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
  


    public function index(){
        return view('home');
    }
    public function home(){
        return view('home');
    }
    public function service(){
        // $products=array("XPress Bottle",)
        return view('Service');
    }
    public function teams(){
        return view('Teams');
    }
    public function aboutUs(){
        return view('aboutUs');
    }
    public function contact(){
        return view('Contact');
    }
    public function login(){
        return view('Login');
    }

    public function loginSubmitted(Request $request){
        $user= array('email@email.com','123456');
        $validate = $request->validate([
            'email'=>'email',
            'password'=>'required|min:5|max:10',
        ],
        [
            'password.required'=>'Please put your Password',
            'email.required'=>'Please put your Email',
            'password.min'=>'password must be greater than 5 charcters'
        ]
        );
        if($request->email==$user[0] && $request->password==$user[1])
        {
            return  redirect('/home');
        }
        return redirect()->route('login');
    }

    public function registration(){
        return view('Register');
    }

    public function registrationSubmitted(Request $request){
        $validate = $request->validate([
            'email'=>'email',
            'password'=>'required|min:5|max:10',
        ],
        [
            'password.required'=>'Please put your Password',
            'email.required'=>'Please put your Email',
            'password.min'=>'password must be greater than 5 charcters'
        ]
        );
        return  redirect('/home');
    }
}
