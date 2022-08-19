
@extends('layouts.main')


@section('container')

    

    <article class="mb-5">
    <h1>{{ $post->title }}</h1>
    
    {!! $post->body !!}
    
    </article>

    <a href="/post">Back to Post</a>
    

@endsection