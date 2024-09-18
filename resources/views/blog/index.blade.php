@extends('layouts.app')

@section('content')
    <div class="row">
        @foreach ($blogs as $blog)
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-header bg-white border-0">
                        <div class="d-flex align-items-center justify-content-between my-1">
                            <a href="{{ route('blog.filter-category', $blog->categories->slug) }}">
                                <span class="badge text-dark bg-opacity-25 fw-normal
                                    @if($blog->categories->name == 'Tech') bg-primary
                                    @elseif($blog->categories->name == 'Health') bg-secondary
                                    @elseif($blog->categories->name == 'Entertainment') bg-warning
                                    @elseif($blog->categories->name == 'Education') bg-danger
                                    @elseif($blog->categories->name == 'Business') bg-info
                                    @endif"
                                    style="padding: 6px 10px;">
                                    {{ $blog->categories->name }}
                                </span>
                            </a>
                            <div class="d-flex align-items-center">
                                <p class="m-0" style="font-size: 12px">{{ $blog->created_at->diffForHumans() }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <a href="{{ route('blog.show', $blog->slug) }}"
                            class="link-underline-dark link-underline-opacity-0 link-underline-opacity-100-hover link-offset-2">
                            <h4 class="text-dark">{{ $blog->title }}</h4>
                        </a>
                        <p style="font-size: 14px">{{ Str::limit($blog->body, 150) }}</p>
                        <div class="mt-auto">
                            <div class="d-flex align-items-center justify-content-between">
                                <a href="{{ route('blog.filter-author', $blog->users->username) }}" class="d-flex align-items-center link-underline-dark link-underline-opacity-0 link-underline-opacity-100-hover">
                                    <img src="{{ asset('assets/images/author.jpeg') }}" alt="author" style="width: 30px; height: 30px; border-radius: 50%; object-fit: cover;">
                                    <p class="m-0 ms-2 text-dark fw-semibold" style="font-size: 12px;">{{ $blog->users->name }}</p>
                                </a>
                                <a href="{{ route('blog.show', $blog->slug) }}" class="link-underline link-underline-opacity-0" style="font-size: 12px">Read more &raquo;</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
