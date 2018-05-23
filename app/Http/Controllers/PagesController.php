<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

    public function index(){
        return view('pages.welcome');
    }

    public function contact(){
        return view('pages.contact');
    }

    public function about(){
        return view('pages.about');
    }

}