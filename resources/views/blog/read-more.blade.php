@extends('layouts.app')

@section('content')
    <article class="py-4 border-bottom">
        <h1>{{ $blog['title'] }}</h1>
        <p class="text-secondary">{{ $blog['author'] }} | {{ \Carbon\Carbon::parse($blog['date'])->translatedFormat('d F Y') }}</p>
        <p>{{ $blog['body'] }}</p>
        <a href="{{ route('blog') }}" class="link-underline link-underline-opacity-0">&laquo; Bact to Blog</a>
    </article>
@endsection
