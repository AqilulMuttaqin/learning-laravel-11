<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();

        return view('blog.index', [
            'title' => 'Blog',
            'blogs' => $blogs
        ]);
    }

    public function show(Blog $blog) {
        if (!$blog) {
            abort(404);
        }

        return view('blog.read-more', [
            'title' => 'Blog',
            'blog' => $blog
        ]);
    }
}
