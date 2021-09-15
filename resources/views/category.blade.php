@extends('layouts.main')

@section('content')
@include('layouts.navbar')
<div class="container mt-4">
    <h1>Category List : {{ $category }}</h1>
    @foreach($posts as $p)
        <h4><a class='text-decoration-none text-success' href="/post/{{ $p->slug }}">{{ $p->title }}</a></h4>
    @endforeach
    <a href="/posts">Go to All Posts</a><br>
    <a href="/categories">Go to All Categories</a>
</div>

@endsection