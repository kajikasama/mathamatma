@extends('layouts.main')

@include('layouts.navbar')
@section('content')
<div class="container mt-4">
    <h1 style='font-weight: 300;'>{{ $title }}</h1>
    @if($posts->count())
    <div class="card mb-3 text-center">
        <img src="https://source.unsplash.com/1200x400/?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
        <div class="card-body">
            <h2> <a href="" class="card-title text-dark text-decoration-none">{{ $posts[0]->title }}</a></h2>
            <p class="card-text"><small class="text-muted">Written By ~ <a class='text-decoration-none text-success' href="/author/{{ $posts[0]->author->slug }}">{{ $posts[0]->author->name }}</a> in <a class='text-decoration-none text-success' href="/category/{{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a> Last updated {{ $posts[0]->created_at->diffForHumans() }}</small></p>
            <p class="card-text">{{ $posts[0]->excerpt }}</p>
            <a href="/post/{{ $posts[0]->slug }}" class='btn btn-success'>ReadMe</a>
        </div>
    </div>
    @endif
    <hr>
    <div class="container">
        <div class="row">
            @foreach($posts->skip(1) as $p)
            <div class="col-md-4 mt-4">
                <div class="card">
                <a href="/category/{{ $p->category->slug }}"> 
                <div class='position-absolute px-3 py-2 text-white' style='background:rgba(0,0,0,0.6)'>{{ $p->category->name }}</div>
                <img src="https://source.unsplash.com/600x400/?{{ $p->category->name }}" class="card-img-top" alt="{{ $p->category->name }}">
                </a>
                    <div class="card-body">
                        <h5 class="card-title">{{ $p->title }}</h5>
                        <p class="card-text"><small>Written by ~ <a class='text-decoration-none text-success' href="/author/{{ $p->author->slug }}">{{ $p->author->name }}</a></small></p>
                        <p class="card-text">{{ $p->excerpt }}</p>
                        <a href="/post/{{ $p->slug }}" class="btn btn-success">Go somewhere</a>
                    </div>
                </div>
            </div>

            {{-- <article>
        <br>
        <h2>
            <a href="/post/{{ $p->slug }}" class='text-decoration-none text-success fw-bold'>{{ $p->title }}</a>
            </h2>
            <h6 class='text-secondary'>Written By ~
                <a class='text-decoration-none text-success' href="/author/{{ $p->author->slug }}">{{ $p->author->name }}</a> in
                <a class='text-decoration-none text-success' href="/category/{{ $p->category->slug }}">{{ $p->category->name }}</a></h6>
            <p>{{ $p->excerpt }}... <a class='text-decoration-none' href="/post">read more</a></p>
            <hr>
            </article> --}}
            @endforeach
        </div>
    </div>
</div>

@endsection
