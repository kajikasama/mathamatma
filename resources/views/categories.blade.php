@extends('layouts.main')

@section('content')
@include('layouts.navbar')
<div class="container mt-4">
    <h1>Category List : </h1>
    @foreach($category as $c)
        <h4><a class='text-decoration-none text-success' href="/category/{{ $c->slug }}">{{ $c->name }}</a></h4>
    @endforeach
</div>

@endsection