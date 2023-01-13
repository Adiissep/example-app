<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function create()
   {
       return view('post.create');
   }
   
   public function store(Request $request)
   {
 
       $post = new Post;
   
       $post->title = $request->title;
       $post->body = $request->body;
       $post->user_id = Auth::user()->id;
   
       $post->save();

       return back();
   }
}
