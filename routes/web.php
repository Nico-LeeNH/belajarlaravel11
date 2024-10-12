<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

use function Pest\Laravel\post;


Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});
Route::get('/about', function () {
    return view('about', ['nama'=> 'Nico','title' => 'about']);
});
Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => Post::all()]);
});

Route::get('/post/{slug}', function ($slug){
    $post = Post::find($slug);
    return view('post', ['title' => 'single post', 'post' => $post]);
});
Route::get('/contact', function () {
    return view('contact', ['title' => 'contact']);
});
