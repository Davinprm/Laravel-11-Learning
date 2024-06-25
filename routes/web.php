<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
        'posts' => [
            [
                'id' => 1,
                'slug' => 'Content 1',
                'title' => 'Content 1',
                'author' => 'Davin Permana',
                'article' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, quia odit repellendus tenetur delectus inventore esse ducimus animi quis ullam, saepe quisquam eos laboriosam nam quos possimus hic dignissimos repudiandae?'
            ],
            [
                'id' => 2,
                'slug' => 'Content 2',
                'title' => 'Content 2',
                'author' => 'Nayna Azmilla',
                'article' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, quia odit repellendus tenetur delectus inventore esse ducimus animi quis ullam, saepe quisquam eos laboriosam nam quos possimus hic dignissimos repudiandae?'
            ]
        ]
    ]);
});


// wild card route
Route::get('/article/{slug}', function ($slug)
// if there's request to article page with aditional data (id), catch it and then save it as ID var (wild card)
// callback function, catch as a ID var
{
    $posts = [
        [
            'id' => 1,
            'slug' => 'Content 1',
            'title' => 'Content 1',
            'author' => 'Davin Permana',
            'article' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, quia odit repellendus tenetur delectus inventore esse ducimus animi quis ullam, saepe quisquam eos laboriosam nam quos possimus hic dignissimos repudiandae?
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur, harum corrupti commodi in nemo animi eaque adipisci sunt ducimus, saepe ab officiis recusandae quibusdam illo nisi quasi inventore, asperiores voluptatum?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt inventore sequi cum nam quis aspernatur blanditiis accusamus libero illum. Enim, earum, eius consequatur cumque officiis ad doloremque hic eum provident, laborum laudantium. Maiores officia sint debitis incidunt nisi laboriosam rem aliquid labore minima amet doloribus, odit neque excepturi accusantium alias.'
        ],
        [
            'id' => 2,
            'slug' => 'Content 2',
            'title' => 'Content 2',
            'author' => 'Nayna Azmilla',
            'article' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, quia odit repellendus tenetur delectus inventore esse ducimus animi quis ullam, saepe quisquam eos laboriosam nam quos possimus hic dignissimos repudiandae? 
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt inventore sequi cum nam quis aspernatur blanditiis accusamus libero illum. Enim, earum, eius consequatur cumque officiis ad doloremque hic eum provident, laborum laudantium. Maiores officia sint debitis incidunt nisi laboriosam rem aliquid labore minima amet doloribus, odit neque excepturi accusantium alias.
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur, harum corrupti commodi in nemo animi eaque adipisci sunt ducimus, saepe ab officiis recusandae quibusdam illo nisi quasi inventore, asperiores voluptatum?'
        ]
    ];

    $post = Arr::first($posts, function($post) use ($slug) {
        return $post['slug'] == $slug;
    });
    // call Arr/array function with First method = searching first array elmnt that match // first param is d obj n second param is callback function to save it with $post var
    // "use ($id)" is to check global var that outside d function scope
    // match d id post on associative array with $id in global var outside d scope

    return view('article', ['title' => 'Article', 'post' => $post]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Me', 'name' => 'Davin Permana', 'email' => 'davinpermana64@gmail.com']);
});