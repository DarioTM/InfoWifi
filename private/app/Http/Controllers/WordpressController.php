<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class wordpressController extends Controller
{
    
    public function home(){
        return view('wordpress.home');
    }
    
    public function points(){
        return view('wordpress.points');
    }
    
    public function about()
    {
        return view('wordpress.about');
    }
    
    public function contact()
    {
        return view('wordpress.contact');
    }
    
}
