
@extends('layouts.main')


@section('container')
<h1 class="md-5"> Halaman Category</h1>

    @foreach($categories as $category)
<ul>
    <li>
        <h2><a href="/categories/{{ $category->slug}}" class="text-decoration-none">{{ $category->name }} </a></h2>
    </li>
</ul>
    

    
    @endforeach

@endsection