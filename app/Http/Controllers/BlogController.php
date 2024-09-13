<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Criteria;
use App\Models\User;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::with('users', 'criterias')->get();

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

    public function filterCriteria(Criteria $criteria)
    {
        return view('blog.index', [
            'title' => 'Blog in ' .$criteria->criteria,
            'blogs' => $criteria->blogs
        ]);
    }
}
