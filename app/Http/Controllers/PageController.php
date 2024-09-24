<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function Spatie\LaravelPdf\Support\pdf;

class PageController extends Controller
{
    public function home(){

        return view("pages.home");
    }
    public function contactUs(){

        return view("pages.contact-us");
    }
    public function aboutUs(){

        return view("pages.about-us");
    }
    public function logIn(){

        return view("pages.log-in");
    }
    public function register(){

        return view("pages.register");
    }
    public function test(){

        return view("test");
    }

    // public function data(Request $request){

    // Player::create($request->all());

    // }
}
