<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{   
    
    public function index()
    {
        return view('article', [
            "name" => "Khairul Ariandi Rida",
            "title" => "Article",
            "posts" => Post::all()
        ]);
    }

    public function subArticle(Post $post)
    {
        return view('post', [
            "name" => "Khairul Ariandi Rida",
            "title" => $post->title,//print (Post::find($id->get('title'))),
            "p_post" => $post
            
        ]);

    }
    //
}
