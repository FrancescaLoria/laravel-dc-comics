@extends('layout.app')

@section('content')
    <h1>Homepage</h1>
    <div class="container mt-4">
        <div class="row">
            <div class="col-6">
                <a href="{{route('comics.index')}}">Visualizza fumetti</a>
            </div>
        </div>
    </div>
@endsection