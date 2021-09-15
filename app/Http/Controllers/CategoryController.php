<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Posts;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view('categories', [
            'title' => 'Category',
            'category' => Category::all()
        ]);
    }
    // public function singleCategory(){
    //     return view('category', [
    //         'title' => 'Category', 
    //         'post' => Posts::all()
    //     ]);
    // }
}
