<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class publicController extends Controller
{
    public function index(){
        $posts = Post::simplePaginate(10);
        return view('home', compact('posts'));
    }

    public function show(Post $post){
        return view('show', compact('post'));
    }
}
