<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
   public function newPost(){
       return view('add');
   }

   public function storePost(Request $request){
       $this->validate($request, [
           'title' => 'required|unique:posts|max:255',
           'text' => 'required',
       ]);

       $title = $request->title;
       $text = $request->text;
       $newPost = new Post();
       $newPost->title = $title;
       $newPost->text = $text;
       $newPost->save();

       return redirect('/');

   }
}
