<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::with('users', 'categories')->get();

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
        $blogs = $user->blogs->load('users', 'categories');
        return view('blog.index', [
            'title' => 'Blog by ' . $user->name,
            'blogs' => $blogs
        ]);
    }

    public function filterCategory(Category $category)
    {
        $blogs = $category->blogs->load('users', 'categories');
        return view('blog.index', [
            'title' => 'Blog in ' .$category->name,
            'blogs' => $blogs
        ]);
    }
}
