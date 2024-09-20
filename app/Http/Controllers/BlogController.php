<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::filter(request(['search', 'category', 'author']))
            ->latest()
            ->paginate(6)
            ->withQueryString();

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
        if (!$user) {
            abort(404);
        }

        return view('blog.index', [
            'title' => 'Blog by ' . $user->name,
            'blogs' => $user->blogs
        ]);
    }

    public function filterCategory(Category $category)
    {
        if (!$category) {
            abort(404);
        }
        
        return view('blog.index', [
            'title' => 'Blog in ' .$category->name,
            'blogs' => $category->blogs
        ]);
    }
}
