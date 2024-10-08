<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});
Route::get('/about', function () {
    return view('about', ['nama'=> 'Nico','title' => 'about']);
});
Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' =>[
        [
            'title' => 'artikel 1',
            'author' => 'unknown',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero doloremque, iusto consequuntur accusamus obcaecati minus est, reprehenderit excepturi debitis iure, illo nisi! Dolore soluta earum, maiores velit perspiciatis veniam. Nihil.'
        ],
        [
            'title' => 'artikel 1',
            'author' => 'unknown',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero doloremque, iusto consequuntur accusamus obcaecati minus est, reprehenderit excepturi debitis iure, illo nisi! Dolore soluta earum, maiores velit perspiciatis veniam. Nihil.'
        ]
    ]]);
});
Route::get('/contact', function () {
    return view('contact', ['title' => 'contact']);
});
