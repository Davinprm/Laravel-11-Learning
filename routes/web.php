<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
        'posts' => Post::all()
    ]);
});


// wild card route
Route::get('/article/{slug}', function ($slug)
// if there's request to article page with aditional data (id), catch it and then save it as ID var (wild card)
// callback function, catch as a ID var
{

    $post = Post::find($slug);

    return view('article', ['title' => 'Article', 'post' => $post]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Me', 'name' => 'Davin Permana', 'email' => 'davinpermana64@gmail.com']);
});