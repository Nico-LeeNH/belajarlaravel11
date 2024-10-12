<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post{
    public static function all(){
    return[
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
            ];
    }

    public static function find($slug){
    $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug
        );

        if (!$post){
            abort(404);
        }
        return $post;

    //     return Arr::first(static::all(), function ($post) use ($slug){
    //         return $post['slug'] == $slug;
    //     });
    }
}