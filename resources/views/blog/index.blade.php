@extends('layouts.app')

@section('content')
    <style>
        #search::placeholder {
            color: rgba(0, 0, 0, 0.25);
        }
    </style>
    <div class="d-flex justify-content-center">
        <form action="{{ route('blog') }}" method="GET">
            @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            @if (request('author'))
                <input type="hidden" name="author" value="{{ request('author') }}">
            @endif
            <div class="input-group mt-4 mb-5 shadow-sm" style="border-radius: 20px">
                <input type="search" aria-label="Search" class="form-control" id="search" name="search" placeholder="Search by title!!" autocomplete="off" value="{{ request('search') }}" style="border-radius: 20px 0 0 20px;">
                <button class="btn btn-primary" type="submit" style="border-radius: 0 20px 20px 0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                    </svg>
                </button>
            </div>
        </form>
    </div>
    {{ $blogs->links() }}
    <div class="row my-2">
        @forelse ($blogs as $blog)
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-header bg-white border-0">
                        <div class="d-flex align-items-center justify-content-between my-1">
                            <a href="{{ route('blog') }}?category={{ $blog->categories->slug }}">
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
                                <a href="{{ route('blog') }}?author={{ $blog->users->username }}" class="d-flex align-items-center link-underline-dark link-underline-opacity-0 link-underline-opacity-100-hover">
                                    <img src="{{ asset('assets/images/author.jpeg') }}" alt="author" style="width: 30px; height: 30px; border-radius: 50%; object-fit: cover;">
                                    <p class="m-0 ms-2 text-dark fw-semibold" style="font-size: 12px;">{{ $blog->users->name }}</p>
                                </a>
                                <a href="{{ route('blog.show', $blog->slug) }}" class="link-underline link-underline-opacity-0" style="font-size: 12px">Read more &raquo;</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="alert alert-primary" role="alert">
                Blog not found!!!
            </div>
            <a href="{{ route('blog') }}" class="link-underline link-underline-opacity-0">&laquo; Back to all blog</a>
        @endforelse
    </div>
    {{ $blogs->links() }}
@endsection
