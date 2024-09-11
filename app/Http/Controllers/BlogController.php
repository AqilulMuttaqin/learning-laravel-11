<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::with('users')->get();

        return view('blog.index', [
            'title' => 'Blog',
            'blogs' => $blogs
        ]);
    }

    public function show(Blog $blog)
    {
        if (!$blog) {
            abort(404);
        }

        return view('blog.read-more', [
            'title' => 'Blog Read More',
            'blog' => $blog
        ]);
    }

    public function filterAuthor(User $user)
    {
        return view('blog.index', [
            'title' => 'Blog by ' . $user->name,
            'blogs' => $user->blogs
        ]);
    }
}
