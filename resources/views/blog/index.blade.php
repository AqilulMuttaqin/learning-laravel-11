@extends('layouts.app')

@section('content')
    @foreach ($blogs as $blog)
        <article class="py-4 border-bottom">
            <h1>{{ $blog->title }}</h1>
            <p class="text-secondary">{{ $blog->author }} | {{ $blog->release->translatedFormat('d F Y') }}</p>
            <p>{{ Str::limit($blog->body, 200) }}</p>
            <a href="{{ route('blog.show', $blog->slug) }}" class="link-underline link-underline-opacity-0">Read More &raquo;</a>
        </article>
    @endforeach
@endsection
