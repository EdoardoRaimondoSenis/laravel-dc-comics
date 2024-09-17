@extends('layouts.main')


@section('content')
<div class="container my-5">
    <h1>Nuovo Comic</h1>
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="exampleFormControlInput1">TITOLO</label>
          <input name="title" class="form-control" id="exampleFormControlInput1" placeholder="Scrivi qui il titolo">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">IMMAGINE</label>
            <input name="thumb" class="form-control" id="exampleFormControlInput1" placeholder="Incolla qui il link della tua immagine">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">PREZZO</label>
            <input name="price" class="form-control" id="exampleFormControlInput1" placeholder="Inserisci il prezzo">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">SERIE</label>
            <input name="series" class="form-control" id="exampleFormControlInput1" placeholder="Inserisci la serie di provenienza">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">DATA DI USCITA</label>
            <input type="date" name="sale_date" class="form-control" id="exampleFormControlInput1" placeholder="Inserisci la data di uscita">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">TIPO</label>
            <input name="type" class="form-control" id="exampleFormControlInput1" placeholder="Inserisci il genere di fumetto">
          </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">DESCRIZIONE</label>
          <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button class="btn btn-primary" type="submit">Aggiungi</button>
      </form>
</div>


@endsection


@section('titlePage')
    Aggiungi un nuovo Comic
@endsection