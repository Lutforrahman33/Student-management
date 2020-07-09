<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PageController extends Controller
{
    public function welcome(){

     $posts = Post::orderBy('id' ,'desc')->get();

     return view('welcome')->withposts($posts);

    }


}
