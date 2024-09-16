{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
<?php

$thumbs = config('data');
 

?>

@section('hero')
    <div class="container my-5">
        <h1>COMICS</h1>
    </div>
@endsection

@extends('layouts.main')

@section('content')

<main>
    <div class="imgMain">
        <div class="title">CURRENT SERIES</div>
    </div>
    <div class="containerCards">
        @foreach ($thumbs as $thumb)
        <div class="card">
            <img src="{{ $thumb['thumb'] }}" alt="">
            <h2>{{ $thumb['title'] }}</h2>
        </div>
        @endforeach
        <a href="" class="loadMore">LOAD MORE</a>
    </div>  
</main>

@endsection

