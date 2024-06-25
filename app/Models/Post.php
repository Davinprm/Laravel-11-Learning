<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
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
    }

    public static function find($slug): array
    {
        // using static method in d same class doesn't have to write full name of d method itself, just use "static::" instead
        // return Arr::first(static::all(), function ($post) use ($slug)
        // call Arr/array function with First method = searching first array elmnt that match // first param is d obj n second param is callback function to save it with $post var
        // "use ($id)" is to check global var that outside d function scope
        // match d id post on associative array with $id in global var outside d scope

        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);
        // using arrow func technique, doesn't have scope concept // => as arrow func n then return val

        if (empty($post)) {
            abort(404);
        }
        return $post;
    }   
}