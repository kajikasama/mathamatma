@extends('layouts.main')

@include('layouts.navbar')
@section('content')
<div class="container mt-4">
    <h1 style='font-weight: 300;'>{{ $title }}</h1>
    <hr>
    @foreach($posts as $p)
    <article>
        <br>
        <h2>
            <a href="/post/{{ $p->slug }}" class='text-decoration-none text-success fw-bold'>{{ $p->title }}</a>
        </h2>
        <h6 class='text-secondary'>Written By ~
            <a class='text-decoration-none text-success' href="/author/{{ $p->author->slug }}">{{ $p->author->name }}</a> in
            <a class='text-decoration-none text-success' href="/category/{{ $p->category->slug }}">{{ $p->category->name }}</a></h6>
        <p>{{ $p->excerpt }}... <a class='text-decoration-none' href="/post">read more</a></p>
        <hr>
    </article>
    @endforeach
</div>

@endsection
