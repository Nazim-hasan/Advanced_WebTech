<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        return view('app');
    }
    public function home(){
        return view('home');
    }
    public function service(){
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
}
