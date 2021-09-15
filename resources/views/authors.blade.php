@extends('layouts.main')

@section('content')
@include('layouts.navbar')
<div class="container mt-4">
    <h1>Author List : </h1>
    @foreach($author as $a)
        <h4><a class='text-decoration-none text-success' href="/author/{{ $a->slug }}">{{ $a->name }}</a></h4>
    @endforeach
</div>
@endsection