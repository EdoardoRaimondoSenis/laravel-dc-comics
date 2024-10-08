@extends('layouts.main')


@section('content')

<div class="container my-5">
    <h1>Lista Comics</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">TITOLO</th>
            <th scope="col">DESCRIZIONE</th>
            <th scope="col">IMMAGINE</th>
            <th scope="col">PREZZO</th>
            <th scope="col">SERIE</th>
            <th scope="col">DATA D'USCITA</th>
            <th scope="col">TIPO</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
            <tr>
                <th scope="row">{{ $comic->id }}</th>
                <td>{{ $comic->title }}</td>
                <td>{{ $comic->description }}</td>
                <td><img class="img-thumbnail" src="{{ $comic->thumb }}" alt=""></td>
                <td>${{ $comic->price }}</td>
                <td>{{ $comic->series }}</td>
                <td>{{ $comic->sale_date }}</td>
                <td>{{ $comic->type }}</td>
                <td><a class="btn btn-primary" href="{{ route('comics.show', $comic) }}" role="button">Vedi</a></td>
                <td><a class="btn btn-warning" href="{{ route('comics.edit', $comic) }}" role="button">Modifica</a></td>
                <td>
                  <form action="{{ route('comics.destroy', $comic) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input class="btn btn-danger" type="submit" value="Elimina">
                  </form>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
</div>

@endsection


@section('titlePage')
    Lista Comics
@endsection