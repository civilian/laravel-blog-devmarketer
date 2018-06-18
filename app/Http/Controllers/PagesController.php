<?php

namespace App\Http\Controllers;

use App\Post;

class PagesController extends Controller {

    public function index(){
        $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
        return view('pages.welcome')->withPosts($posts);
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
