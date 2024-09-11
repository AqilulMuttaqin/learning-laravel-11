@extends('layouts.app')

@section('content')
    @foreach ($blogs as $blog)
        <article class="py-4 border-bottom">
            <a href="{{ route('blog.show', $blog->slug) }}" class="link-underline-dark link-underline-opacity-0 link-underline-opacity-100-hover link-offset-2">
                <h1 class="text-dark">{{ $blog->title }}</h1>
            </a>
            <p class="text-secondary">{{ $blog->author }} | {{ $blog->release->diffForHumans() }}</p>
            <p>{{ Str::limit($blog->body, 200) }}</p>
            <a href="{{ route('blog.show', $blog->slug) }}" class="link-underline link-underline-opacity-0">Read More &raquo;</a>
        </article>
    @endforeach
@endsection
