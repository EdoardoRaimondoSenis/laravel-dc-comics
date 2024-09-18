@extends('layouts.main')


@section('content')
<div class="container my-5">
    <h1>Nuovo Comic</h1>

  @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
  @endif

    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="exampleFormControlInput1">TITOLO</label>
          <input value="{{ old('title') }}" name="title" class="form-control @error('title') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Scrivi qui il titolo">
          @error('title')
            <small class="text-danger">{{ $message }}</small>
          @enderror
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">IMMAGINE</label>
            <input value="{{ old('thumb') }}" name="thumb" class="form-control @error('thumb') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Incolla qui il link della tua immagine">
            @error('thumb')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">PREZZO</label>
            <input value="{{ old('price') }}" name="price" class="form-control @error('price') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Inserisci il prezzo">
            @error('price')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">SERIE</label>
            <input value="{{ old('series') }}" name="series" class="form-control @error('series') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Inserisci la serie di provenienza">
            @error('series')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">DATA DI USCITA</label>
            <input value="{{ old('sale_date') }}" type="date" name="sale_date" class="form-control @error('sale_date') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Inserisci la data di uscita">
            @error('sale_date')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">TIPO</label>
            <input value="{{ old('type') }}" name="type" class="form-control @error('type') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Inserisci il genere di fumetto">
            @error('type')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">DESCRIZIONE</label>
          <textarea value="{{ old('description') }}" name="description" class="form-control @error('description') is-invalid @enderror" id="exampleFormControlTextarea1" rows="3"></textarea>
          @error('description')
            <small class="text-danger">{{ $message }}</small>
          @enderror
        </div>
        <button class="btn btn-primary" type="submit">Aggiungi</button>
      </form>
</div>


@endsection


@section('titlePage')
    Aggiungi un nuovo Comic
@endsection