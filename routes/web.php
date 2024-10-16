<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

use function Pest\Laravel\post;


Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});
Route::get('/about', function () {
    return view('about', ['nama'=> 'Nico', 'title' => 'about']);
});
Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => Post::all()]);
});

Route::get('/post/{post:slug}', function (Post $post){
    return view('post', ['title' => 'single post', 'post' => $post]);
});
Route::get('/authors/{user:username}', function (User $user){
    return view('posts', ['title' => count($user->posts) . ' article by ' . $user->name, 'posts' => $user->posts]);
});
Route::get('/contact', function () {
    return view('contact', ['title' => 'contact']);
});
