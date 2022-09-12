<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controllers
{
    public function index(){
        return view('posts',[
            "title" => "Post",
            "post" => Post::all()
        ]);
    }


    public function show($slug){
        return view('post',[
            "title" => "post",
            "post" => post::find($slug)
        ]);
    }
}