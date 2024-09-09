<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index', [
        'title' => 'Home',
        'name' => 'Aqilul Muttaqin'
    ]);
})->name('home');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

Route::get('/about', function () {
    return view('about.index', [
        'title' => 'About'
    ]);
})->name('about');

Route::get('/contact', function () {
    return view('contact.index', [
        'title' => 'Contact'
    ]);
})->name('contact');
