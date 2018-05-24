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
        $first = "Oscar";
        $last = "Chamat";
        $fullname = $first . " " . $last;
        $email = 'chamatoscar@gmail.com';
        return view('pages.about')->withFullname($fullname)->withEmail($email);
    }

}