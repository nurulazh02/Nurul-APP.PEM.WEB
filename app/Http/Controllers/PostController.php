<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index()
    {
        $posts = Post::latest()->paginate(5);
        return view('post.index' , compact('posts'));
    }
}
