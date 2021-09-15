<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Posts;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('posts', [
            'title' => 'All Post',
            // 'posts' => Posts::all()
            'posts' => Posts::latest()->get(),
            'active' => 'post'
        ]);
    }
    public function selectPost(Posts $post){
        return view('post', [
            'title' => 'Post',
            'post' => $post,
            'category' => $post,
            'active' => 'post'
        ]);
    }
}
