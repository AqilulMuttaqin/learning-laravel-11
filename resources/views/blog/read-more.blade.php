@extends('layouts.app')

@section('content')
    <article class="py-4 border-bottom">
        <h1>{{ $blog->title }}</h1>
        <p class="text-secondary">{{ $blog->author }} | {{ $blog->release->diffForHumans() }}</p>
        <p>{!! nl2br(e($blog->body)) !!}</p>
        <a href="{{ route('blog') }}" class="link-underline link-underline-opacity-0">&laquo; Back to Blog</a>
    </article>
@endsection
