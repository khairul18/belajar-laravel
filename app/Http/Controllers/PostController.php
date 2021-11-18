<?php

namespace App\Http\Controllers;

use App\Models\MPost;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{   
    public function index()
    {
        return view('article', [
            "name" => "Khairul Ariandi Rida",
            "title" => "Article",
            "posts" => MPost::all()
        ]);
    }

    public function subArticle($slug)
    {
        return view('post', [
            "name" => "Khairul Ariandi Rida",
            "title" => $slug,
            "p_post" => MPost::find($slug)
            
        ]);
    }
    //
}
