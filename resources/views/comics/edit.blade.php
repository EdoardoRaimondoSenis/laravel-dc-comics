@extends('layouts.main')

@section('content')
<div class="container my-5">
    <h1>Modifica {{ $comic->title }}</h1>
    <form action="{{ route('comics.update', $comic)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="exampleFormControlInput1">TITOLO</label>
          <input value="{{ $comic->title }}" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Scrivi qui il titolo">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">IMMAGINE</label>
            <input value="{{ $comic->thumb }}" name="thumb" class="form-control" id="exampleFormControlInput1" placeholder="Incolla qui il link della tua immagine">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">PREZZO</label>
            <input value="{{ $comic->price }}" name="price" class="form-control" id="exampleFormControlInput1" placeholder="Inserisci il prezzo">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">SERIE</label>
            <input value="{{ $comic->series }}" name="series" class="form-control" id="exampleFormControlInput1" placeholder="Inserisci la serie di provenienza">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">DATA DI USCITA</label>
            <input value="{{ $comic->sale_date }}" type="date" name="sale_date" class="form-control" id="exampleFormControlInput1" placeholder="Inserisci la data di uscita">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">TIPO</label>
            <input value="{{ $comic->type }}" name="type" class="form-control" id="exampleFormControlInput1" placeholder="Inserisci il genere di fumetto">
          </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">DESCRIZIONE</label>
          <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $comic->description }}</textarea>
        </div>
        <button class="btn btn-warning mt-3" type="submit">Modifica</button>
        <a class="btn btn-primary mt-3" href="{{ route('comics.index') }}" role="button">Annulla</a>
      </form>
</div>


@endsection


@section('titlePage')
    Modifica un comic
@endsection