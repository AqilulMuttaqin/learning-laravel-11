@extends('layouts.app')

@section('content')
    <article class="py-4 border-bottom">
        <h1>{{ $post['title'] }}</h1>
        <p class="text-secondary">{{ $post['author'] }} | {{ \Carbon\Carbon::parse($post['date'])->translatedFormat('d F Y') }}</p>
        <p>{{ $post['body'] }}</p>
        <a href="{{ route('blog') }}" class="link-underline link-underline-opacity-0">&laquo; Bact to Blog</a>
    </article>
@endsection
