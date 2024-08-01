<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home',['title'=> 'Home page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Gadiel Daffa Khayru', 'title' => 'Contact']);
});

Route::get('/posts', function () {
    return view('posts',['title' => 'Blog', 'posts' => post::filter(request(['search','category','author']))->latest()->Paginate(2)]);
});

Route::get('/posts/{post:slug}', function (post $post) {
    return view('posts', ['title'=>'Single Post', 'posts'=> [$post]]);
});

Route::get('/authors/{user:username}', function (User $user) {
    return view('posts', ['title'=>count($user->posts). 'Articles by .$user->name', 'posts'=> [$user->posts]]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', ['title'=>'Articles in: .$category->name', 'posts'=> [$category->posts]]);
});

Route::get('/contact', function () {
    return view('contact', ['title'=>'Contact']);
});