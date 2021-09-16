<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Posts;
use App\Models\Author;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $title = '';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in '. $category->name;
        }
        if(request('author')){
            $author = Author::firstWhere('slug', request('author'));
            $title = ' by '. $author->name;
        }

        return view('posts', [
            'title' => 'All Post' . $title,
            'active' => 'post',
            'posts' => Posts::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
        ]);
    }
    public function selectPost(Posts $post)
    {
        return view('post', [
            'title' => 'Post',
            'post' => $post,
            'category' => $post,
            'active' => 'post'
        ]);
    }
}
