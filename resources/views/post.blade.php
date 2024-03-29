@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $post->title }}</h1>
                <p>
                    <small class="text-muted">
                        By. <a href="/posts?author={{ $post->author->username }}"
                            class="text-decoration-none">{{ $post->author->name }}</a> in
                        <a href="/posts?category={{ $post->category->slug }}"
                            class="text-decoration-none">{{ $post->category->name }}</a>
                        {{ $post->created_at->diffForHumans() }}
                    </small>
                </p>

                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                    alt="{{ $post->category->name }}" class="img-fluid">

                <article class="my-3 fs-6">
                    {{-- Blade Escape --}}
                    {!! $post->body !!}
                </article>

                <a href="/posts" class="d-block mt-2">Back to Posts</a>
            @endsection
        </div>
    </div>
</div>
