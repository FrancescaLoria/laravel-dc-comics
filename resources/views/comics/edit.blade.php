@extends('layout.app')

@section('content')
<div class="container">
    <h1 class="text-center my-4">AGGIORNA IL FUMETTO: {{ $comic->title }}</h1>
    <form action="{{route('comics.update', $comic->id)}}" method="POST">
        @method("PUT")
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Inserici il titolo" value="{{ $comic->title }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" id="description" name="description" rows="3">{{ $comic->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Immagine</label>
            <input type="text" class="form-control" id="thumb" name="thumb" placeholder="inserire immagine" value="{{ $comic->thumb }}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="number" step="0.01" class="form-control" id="price" name="price" placeholder="Inserire prezzo" value="{{ $comic->price }}">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control" id="series" name="series" placeholder="Inserire serie" value="{{ $comic->series }}">
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Data</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="Inserire la data" value="{{ $comic->sale_date }}">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <input type="text" class="form-control" id="type" name="type" placeholder="Inserire il tipo" value="{{ $comic->type }}">
        </div>
        
        <button type="submit" class="btn btn-primary mt-3">Salva</button>
        <a href="{{route('comics.index')}}" class="btn btn-warning mt-3 ms-3">Indietro</a>
    </form>
</div>
    
@endsection