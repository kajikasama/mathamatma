<?php

use App\Models\Category;
use App\Models\Author;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});
Route::get('/restorations', function () {
    return view('restoration', ['title' => 'Restorations']);
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('/post/{post:slug}', [PostController::class, 'selectPost']);
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/authors', [AuthorController::class, 'index']);
Route::get('/category/{category:slug}', function (Category $category){
    return view('posts', [
        'title' => "Category By : $category->name",
        'posts' => $category->posts->load('category', 'author')
    ]);
});
Route::get('/author/{author:slug}', function (Author $author){
    return view('posts', [
        'title' => "Author By : $author->name",
        'posts' => $author->posts->load('category', 'author')
    ]);
});
