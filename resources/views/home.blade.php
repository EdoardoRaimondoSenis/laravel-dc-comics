{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('hero')
    <div>HOME IN WEB.PHP</div>
@endsection

@section('content')
<div class="container my-5">
    <h1>{{ $title }}</h1>
</div>

@endsection


@section('titlePage')
    home
@endsection
