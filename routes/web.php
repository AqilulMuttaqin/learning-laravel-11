<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
})->name('home');

Route::get('/blog', function () {
    return view('blog', [
        'title' => 'Blog'
    ]);
})->name('blog');

Route::get('/category', function () {
    return view('category', [
        'title' => 'Category'
    ]);
})->name('category');

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact'
    ]);
})->name('contact');
