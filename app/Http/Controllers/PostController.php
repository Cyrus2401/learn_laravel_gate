<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::with('user')->get();
        return view('policy.index', compact('posts'));
    }

    public function show(Post $post){
        return view('policy.show')->with('post', $post);
    }
}
