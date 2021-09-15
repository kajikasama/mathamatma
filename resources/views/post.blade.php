@extends('layouts.main')

@include('layouts.navbar')
@section('content')
<div class="container mt-4">
    <br>
    <h2 class=' text-success fw-bold'>{{ $post->title }}</h2>
    <h6 class='text-secondary'>Written By ~
        <a class='text-decoration-none text-success' href="/author/{{ $post->author->slug }}">{{ $post->author->name }}</a> in
        <a class='text-decoration-none text-success' href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a></h6>
    <hr>
    <p>{!! $post->body !!}</p>
    <hr>
    <div class="row">
        <div class="col text-start">
            <a class='text-decoration-none' href="/posts">Like</a>
            <a class='text-decoration-none' href="/posts">Dislike</a>
        </div>
        <div class="col text-end">
            <a class='text-decoration-none' href="/posts">Back To All Posts</a>
        </div>
    </div>
    <hr>
    <h4>Comment : </h4>
    <br>
    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-sm-1">
                <a href="#">
                    <img src="../img/yukari-computer.jpg" class="img-fluid rounded-start" alt="...">
                </a>
            </div>
            <div class="col-sm">
                <div class="card-body">
                    <h6 class="card-title text-success"><span class='fw-bold'><a class='text-decoration-none' href="#">Yakumo Yukari</a></span>
                        <small class="text-muted">3 mins ago</small>
                    </h6>
                    <p class="card-text">
                        <small>
                            This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                        </small>
                    </p>
                    <a href="">Reply</a>
                </div>
                <!-- Example split danger button -->
                
            </div>
            <div class="col-sm-1">
            
            </div>
        </div>
    </div>
    <hr>
    <br>
    <div class="row">
        <form>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Comment</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button class='btn btn-md btn-success text-white'>submit</button>
            <input class='btn btn-md btn-danger text-white' type="reset" value='Reset'>
        </form>
    </div>
</div>

@endsection
