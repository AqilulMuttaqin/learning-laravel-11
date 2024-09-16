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
Route::get('/blog/{blog:slug}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/blog/author/{user:username}', [BlogController::class, 'filterAuthor'])->name('blog.filter-author');
Route::get('/blog/criteria/{criteria:c_slug}', [BlogController::class, 'filterCriteria'])->name('blog.filter-criteria');

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
