<?php

use App\Models\Category;

use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
    return view('home',[
        "title" => "Home",
        "active" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Adi Saputra",
        "email" => "adi.juve22@gmail.com",
        "image" => "adi.jpg",
        "active" => "about"
    ]);
});



Route::get('/posts', [PostController::class, 'index']);
Route::get('/post/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function(){
    return view ('categories',[
        'title' => 'Post Categories',
        'active' => "categories",
        'categories' => Category::all() 
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category){
    return view ('posts',[
        'title' => "Post By Category :$category->name",
        'active' => "categories",
        'posts' => $category->posts->load('category', 'author')
    ]);
});

Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);