@extends('layouts.main')

@section('title', 'WELCOME')

@section('content')

<br><br>
<h1>Regasta clientes</h1>
<hr>
<h3>Dados dos enventos acessando as propriedades</h3>
@foreach($produto as $event)

        <p>Nome: {{$event->titulo}}</p>
      

@endforeach

{{$produto->links()}}

{{-- Comentarioo com blade, nao mostra no html na pagina --}}

@endsection