
@extends('layouts.main')


@section('container')

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">
                    {{ $post->title }}
                </h1>
                <p>
                    By: <a href="/post?author={{ $post->author->username }}" class="text-decoration-none"> 
                        {{ $post->author->name }}</a> in <a href="/post?category={{ $post->category->slug }}" 
                        class="text-decoration-none"> {{ $post->category->name }}</a>
                </p>
                @if ($post->image)
                <div>
                    <img src="{{ asset('storage/'.$post->image) }}" class="card-img-top mt-3" alt="{{ $post->category->name }}">
                </div>
                @else
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top mt-3" alt="{{ $post->category->name }}">
                @endif

                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
                <a href="/post" class="text-decoration-none">BACK TO POST</a>
                
            </div>z
        </div>
    </div>



    
    

@endsection