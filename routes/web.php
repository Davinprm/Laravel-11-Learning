<?php

use App\Models\User;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // $article = Article::with(['author', 'category'])->latest()->get();
    // to make queries loading become eager loading not lazy

    // dump(request('search'));
    // search took from name attribute on searchbox
    // prepare d query, but not execute yet, if there's any req go through if stmt, if it's not, show it full normaly

    return view('home', [
        'title' => 'Home',
        'posts' => Article::filter(request(['search', 'category', 'author']))->latest()->get()
    ]);
});

// wild card route
Route::get('/article/{post:slug}', function (Article $post)
// use Implicit Binding to automativally resolves eloquent models defined in routes or controlller action whose type-hinted var names match a rout segment name
// param inside func is instance from user model
// if there's request to article page with aditional data (id), catch it and then save it as ID var (wild card)
// callback function, catch as a ID var
{
    return view('article', ['title' => 'Article', 'post' => $post]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About Me',
        'name' => 'Davin Permana',
        'email' => 'davinpermana64@gmail.com'
    ]);
});

//route binding
Route::get('/authors/{user:username}', function (User $user) {
    /* $article = $user->article->load('category', 'author'); */
    return view('Home', ['title' => count($user->article) . ' Article by ' . $user->name, 'posts' => $user->article]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    // $article = $category->article->load('category', 'author');
    return view('Home', ['title' => 'Category', 'posts' => $category->article]);
});