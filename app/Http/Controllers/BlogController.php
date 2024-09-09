<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class BlogController extends Controller
{
    public function index()
    {
        $posts = [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Aqilul Muttaqin',
                'date' => '2024-09-09',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed urna tortor, hendrerit ac eleifend eu, faucibus in quam. Curabitur eget volutpat tellus, at varius erat. Curabitur eu interdum risus, consequat blandit dolor. Suspendisse iaculis bibendum interdum. Vivamus semper risus non nulla consequat, vitae laoreet dolor tincidunt. Cras ac tortor sit amet purus ultricies condimentum vitae auctor elit. Nunc lorem leo, ultricies at ipsum at, bibendum dictum arcu. Cras mattis eros pellentesque massa placerat venenatis. Cras porta lorem et tincidunt ultricies. Duis efficitur sagittis quam. Mauris tincidunt sapien sapien, sed varius orci fringilla vitae. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin tincidunt mauris vel ligula interdum, at ullamcorper dui laoreet. Maecenas tincidunt nibh eget nisi pretium, in auctor mauris elementum. Integer ullamcorper nisi ac egestas rutrum. Nullam efficitur lacus a maximus sollicitudin.',
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Aqilul Muttaqin',
                'date' => '2024-09-09',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed urna tortor, hendrerit ac eleifend eu, faucibus in quam. Curabitur eget volutpat tellus, at varius erat. Curabitur eu interdum risus, consequat blandit dolor. Suspendisse iaculis bibendum interdum. Vivamus semper risus non nulla consequat, vitae laoreet dolor tincidunt. Cras ac tortor sit amet purus ultricies condimentum vitae auctor elit. Nunc lorem leo, ultricies at ipsum at, bibendum dictum arcu. Cras mattis eros pellentesque massa placerat venenatis. Cras porta lorem et tincidunt ultricies. Duis efficitur sagittis quam. Mauris tincidunt sapien sapien, sed varius orci fringilla vitae. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin tincidunt mauris vel ligula interdum, at ullamcorper dui laoreet. Maecenas tincidunt nibh eget nisi pretium, in auctor mauris elementum. Integer ullamcorper nisi ac egestas rutrum. Nullam efficitur lacus a maximus sollicitudin.',
            ],
        ];

        return view('blog.index', [
            'title' => 'Blog',
            'posts' => $posts
        ]);
    }

    public function show($slug) {
        $posts = [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Aqilul Muttaqin',
                'date' => '2024-09-09',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed urna tortor, hendrerit ac eleifend eu, faucibus in quam. Curabitur eget volutpat tellus, at varius erat. Curabitur eu interdum risus, consequat blandit dolor. Suspendisse iaculis bibendum interdum. Vivamus semper risus non nulla consequat, vitae laoreet dolor tincidunt. Cras ac tortor sit amet purus ultricies condimentum vitae auctor elit. Nunc lorem leo, ultricies at ipsum at, bibendum dictum arcu. Cras mattis eros pellentesque massa placerat venenatis. Cras porta lorem et tincidunt ultricies. Duis efficitur sagittis quam. Mauris tincidunt sapien sapien, sed varius orci fringilla vitae. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin tincidunt mauris vel ligula interdum, at ullamcorper dui laoreet. Maecenas tincidunt nibh eget nisi pretium, in auctor mauris elementum. Integer ullamcorper nisi ac egestas rutrum. Nullam efficitur lacus a maximus sollicitudin.',
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Aqilul Muttaqin',
                'date' => '2024-09-09',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed urna tortor, hendrerit ac eleifend eu, faucibus in quam. Curabitur eget volutpat tellus, at varius erat. Curabitur eu interdum risus, consequat blandit dolor. Suspendisse iaculis bibendum interdum. Vivamus semper risus non nulla consequat, vitae laoreet dolor tincidunt. Cras ac tortor sit amet purus ultricies condimentum vitae auctor elit. Nunc lorem leo, ultricies at ipsum at, bibendum dictum arcu. Cras mattis eros pellentesque massa placerat venenatis. Cras porta lorem et tincidunt ultricies. Duis efficitur sagittis quam. Mauris tincidunt sapien sapien, sed varius orci fringilla vitae. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin tincidunt mauris vel ligula interdum, at ullamcorper dui laoreet. Maecenas tincidunt nibh eget nisi pretium, in auctor mauris elementum. Integer ullamcorper nisi ac egestas rutrum. Nullam efficitur lacus a maximus sollicitudin.',
            ],
        ];

        $post = Arr::first($posts, function($post) use ($slug) {
            return $post['slug'] == $slug;
        });

        return view('blog.read-more', [
            'title' => 'Blog',
            'post' => $post
        ]);
    }
}
