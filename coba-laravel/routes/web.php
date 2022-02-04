<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\User;

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
    return view('home', ["title" => "Home"]);
});


Route::get('/home', function () {
    return view('home', ["title" => "Home"]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Audi Aqsha",
        "email" => "audiaqsha578@gmail.com",
        "image" => "foto.jpg"
    ]);
});



Route::get('/blog', [PostController::class, 'index']);

//halaman single post

Route::get('post/{post:slug}', [PostController::class, 'show']);

Route::get('categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

Route::get('categories/{category:slug}', function (Category $category) {
    return view('blog', [
        'title' => "Post By Category : $category->name",
        'posts' => $category->posts->load('category','author')
    ]);
});


Route::get('authors/{author:username}', function (User $author) {
    return view('blog', [
        'title' => "Post By Author : $author->name",
        'posts' => $author->post->load('category','author')
    ]);
});
