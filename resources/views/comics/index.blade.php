@extends('layout.app')

@section('content')
<div class="container">
    <h2 class="text-center">I NOSTRI FUMETTI</h2>
    <div class="my-2 text-center">
        <a href="{{route('comics.create')}}">Crea una nuovo fumetto</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Titolo</th>
                <th scope="col">prezzo</th>
                <th scope="col">Serie</th>
                <th scope="col">Tipo</th>
                <th scope="col">Azione</th>
            </tr>
        </thead>
        <tbody>
           
            @foreach ($comics as $comic)
                <tr>
                    <th scope="row">{{ $comic->id }}</th>
                    <td>{{ $comic->title }}</td>
                    <td>{{ $comic->price }}</td>
                    <td>{{ $comic->series }}</td>
                    <td>{{ $comic->type }}</td>
                    <td>
                        <a class="btn btn-success" href="{{ route('comics.show', $comic->id) }}">
                            <i class="fa-solid fa-eye"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
    
@endsection