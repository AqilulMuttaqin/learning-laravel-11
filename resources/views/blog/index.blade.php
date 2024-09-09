@extends('layouts.app')

@section('content')
    @foreach ($posts as $post)
        <article class="py-4 border-bottom">
            <h1>{{ $post['title'] }}</h1>
            <p class="text-secondary">{{ $post['author'] }} | {{ \Carbon\Carbon::parse($post['date'])->translatedFormat('d F Y') }}</p>
            <p>{{ Str::limit($post['body'], 200) }}</p>
            <a href="{{ route('blog.show', $post['slug']) }}" class="link-underline link-underline-opacity-0">Read More &raquo;</a>
        </article>
    @endforeach
@endsection
