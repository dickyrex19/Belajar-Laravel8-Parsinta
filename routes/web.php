<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('home'));

Route::get('/profile', function () {
    $name = "Dicky Juniansyah P";

    return view('profile', [
        'name' => $name
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::view('posts/first-post', 'posts.show');
