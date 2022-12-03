@extends('layouts.main')

@section('title', 'WELCOME')

@section('content')

<br><br>
<h1>Regasta clientes</h1>
<hr>
<h3>Dados dos enventos acessando as propriedades</h3>

@if($user)

<p>{{$user->name}}</p><br>
<p>{{$user->email}}</p><br>
<p>{{$user->id}}</p><br>

@endif

@if($comentario)
    @foreach($comentario as $coments)
    <p>{{$coments->id}} :: {{$coments->comentario}}</p><br>
    @endforeach
@endif

@endsection