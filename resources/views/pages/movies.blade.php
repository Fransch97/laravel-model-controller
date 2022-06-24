@extends('layout.movie')
@section('title','film')
@section('content')

@foreach ($movies as $movie )
<div class="card">
    <h4>{{$movie->title}}</h4>
    <p>titolo originale: {{$movie->original_title}}</p>
    <p>Nazionalità: {{$movie->nationality}}</p>
    <p>Data: {{$movie->date}}</p>
    <p>Voto: {{$movie->vote}}</p>
</div>

@endforeach

@endsection
