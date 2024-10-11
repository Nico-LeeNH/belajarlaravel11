<?php

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
    return view('posts', ['title' => 'Blog', 'posts' =>[
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'artikel 1',
            'author' => 'unknown',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero doloremque, iusto consequuntur accusamus obcaecati minus est, reprehenderit excepturi debitis iure, illo nisi! Dolore soluta earum, maiores velit perspiciatis veniam. Nihil.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'artikel 1',
            'author' => 'unknown',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero doloremque, iusto consequuntur accusamus obcaecati minus est, reprehenderit excepturi debitis iure, illo nisi! Dolore soluta earum, maiores velit perspiciatis veniam. Nihil.'
        ]
    ]]);
});

Route::get('/post/{slug}', function ($slug){
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'artikel 1',
            'author' => 'unknown',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero doloremque, iusto consequuntur accusamus obcaecati minus est, reprehenderit excepturi debitis iure, illo nisi! Dolore soluta earum, maiores velit perspiciatis veniam. Nihil.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'artikel 1',
            'author' => 'unknown',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero doloremque, iusto consequuntur accusamus obcaecati minus est, reprehenderit excepturi debitis iure, illo nisi! Dolore soluta earum, maiores velit perspiciatis veniam. Nihil.'
        ],
    ];
    $post = Arr::first($posts, function ($post) use ($slug){
        return $post['slug'] == $slug;
    });
    return view('post', ['title' => 'single post', 'post' => $post]);
});
Route::get('/contact', function () {
    return view('contact', ['title' => 'contact']);
});
