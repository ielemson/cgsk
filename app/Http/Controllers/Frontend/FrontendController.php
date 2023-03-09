<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    
    public function index(){

        return view('frontend.index');
    }


    public function about_us(){
        return view('frontend.about');
    }

    public function contact_us(){
        return view('frontend.contact');
    }
}
