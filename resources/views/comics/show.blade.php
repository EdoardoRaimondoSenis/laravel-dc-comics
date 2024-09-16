@extends('layouts.main')


@section('content')
<div class="container my-5">
    <h1>{{ $comic->title }}</h1>
    <div class="col">
        <p>{{ $comic->description }}</p>
    </div>
    <div class="col">
        <span>${{ $comic->price }}</span>
    </div>
    <div class="col">
        <span>{{ $comic->series }}</span>
    </div>
    <div class="col">
        <span>{{ $comic->sale_date }}</span>
    </div>
    <div class="col">
        <span>{{ $comic->type }}</span>
    </div>
    <div class="col text-center">
        <img class="img-fluid" alt="Responsive image" src="{{ $comic->thumb }}" alt="">
    </div>   
</div>

@endsection


@section('titlePage')
    Lista Comics
@endsection