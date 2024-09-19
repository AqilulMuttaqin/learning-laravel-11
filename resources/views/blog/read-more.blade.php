@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="card border-0 shadow-sm">
            <div class="card-body d-flex justify-content-center">
                <div class="col-sm-10 my-5">
                    <a href="{{ route('blog') }}" class="link-underline link-underline-opacity-0">&laquo; Back to blog</a>
                    <div class="d-flex align-items-center my-4">
                        <img src="{{ asset('assets/images/author.jpeg') }}" alt="author" style="width: 100px; height: 100px; border-radius: 50%; object-fit: cover;">
                        <div class="ms-3">
                            <a class="link-underline-dark link-underline-opacity-0 link-underline-opacity-100-hover link-offset-2" href="{{ route('blog') }}?author={{ $blog->users->username }}">
                                <h4 class="text-dark">{{ $blog->users->name }}</h4>
                            </a>
                            <p class="text-secondary">
                                <a class="link-underline link-underline-opacity-0" href="{{ route('blog') }}?category={{ $blog->categories->slug }}">
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
                                | {{ $blog->created_at->diffForHumans() }}
                            </p>
                        </div>
                    </div>
                    <h1 class="mb-4" style="font-weight: 900">{{ $blog->title }}</h1>
                    <p class="mb-4">{!! nl2br(e($blog->body)) !!}</p>
                    <a href="{{ route('blog') }}" class="link-underline link-underline-opacity-0">&laquo; Back to blog</a>
                </div>
            </div>
        </div>
    </div>
@endsection
