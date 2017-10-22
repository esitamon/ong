<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function index(){

        return view('pages.index');
    }

// this controller handle the about page view

    public function about(){
        return view('pages.about');
    }
//this controller handle the contact page view

    public function  contact(){
        return view('pages.contact');
    }
//this controller handle the media page view
    public function media(){
        return view('pages.media');
    }

//this controller handle the donate page view

    public function donate(){
        return view('pages.donate');
    }
}
