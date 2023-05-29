@extends('layout.app')

@section('content')
    <h1>PAGINA SHOW</h1>
    <div class="container mt-4">
        <div class="row">
            <div>
                Titolo: {{$comic->title}}
            </div>
            <div>
                Descrizione: {{$comic->description}}
            </div>
            <div>
                Immagine: {{$comic->thumb}}
            </div>
            <div>
                Prezzo: {{$comic->price}}
            </div>
            <div>
                Serie: {{$comic->series}}
            </div>
            <div>
                Data di vendita: {{$comic->sale_date}}
            </div>
            <div>
                Tipo: {{$comic->type}}
            </div>
        </div>

        <div class="mt-5">
            <a href="{{route('comics.index')}}" class="btn btn-warning">Indietro</a>
        </div>
    </div>
@endsection