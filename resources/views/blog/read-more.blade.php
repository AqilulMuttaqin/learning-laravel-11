@extends('layouts.app')

@section('content')
    <article class="py-4 border-bottom">
        <h2>{{ $blog->title }}</h2>
        <p>
            By
            <a href="{{ route('blog.filter-author', $blog->users->username) }}"
                class="link-underline-secondary link-underline-opacity-0 link-underline-opacity-100-hover text-secondary">
                {{ $blog->users->name }}
            </a>
            In
            <a href="{{ route('blog.filter-criteria', $blog->criterias->c_slug) }}"
                class="link-underline-secondary link-underline-opacity-0 link-underline-opacity-100-hover text-secondary">
                {{ $blog->criterias->criteria }}
            </a>
            | {{ $blog->created_at->diffForHumans() }}
        </p>
        <p>{!! nl2br(e($blog->body)) !!}</p>
        <a href="{{ route('blog') }}" class="link-underline link-underline-opacity-0">&laquo; Back to Blog</a>
    </article>
@endsection
