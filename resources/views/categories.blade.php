@extends('layouts.main')

@section('content')
@include('layouts.navbar')
<div class="container mt-4">
    <h1>Category List : </h1>
    <div class="row mt-4">
    @foreach($category as $c)
        <div class="col-md-4 mt-4 pb-4">
        <a href="/posts?category={{ $c->slug }}">
            <div class="card bg-dark text-white">
                <img src="https://source.unsplash.com/500x400/?{{ $c->name }}" class="card-img" alt="{{ $c->name }}">
                <div class="card-img-overlay d-flex align-items-center p-0">
                    <h5 class="card-title flex-fill py-3 fs-4 text-center" style="background:rgba(0,0,0,0.6)">{{ $c->name }}</h5>
                </div>
            </div>
        </a>
        </div>
    @endforeach
    </div>


    {{-- @foreach($category as $c)
    <h4><a class='text-decoration-none text-success' href="/category/{{ $c->slug }}">{{ $c->name }}</a></h4>
    @endforeach --}}
</div>

@endsection
