@extends('layouts.main')

@section('title', 'EDITANDO: ' . $produto->titulo)

@section('content')

<h1>Editando: {{$produto->titulo}}</h1>
<hr>

<form action="/events/update/{{$produto->id}}" method="POST" enctype="multipart/form-data">
    <!-- obrigatorio ultilizar no formulario @csrf-->
    <!-- @csrf ultilizado para proteção de dados -->
    @csrf
    @method('PUT')
    <img src="/img/events/{{$produto->image}}" alt="{{$produto->titulo}}" class="img-preview" height="200px">
    <br>
    <label class="mt-3" for="nome">Selecione a imagem do produto</label>
    <input type="file" name="image" >
    <br>
    <label class="mt-3" for="nome">Nome do produto</label>
    <input type="text" name="titulo" value="{{$produto->titulo}}" >
    <br>
    <label class="mt-3" for="preco">Preço</label>
    <input type="number" step="0.10" name="preco" value="{{$produto->preco}}" >
    <br>
    <label class="mt-3" for="data">Data que encerra a exibição</label>
    <input type="date" name="data" value="$produto->data == 'NULL' ? '' : ->format('y-m-d')">
    {{-- --}}
    <br><br>

    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="items[]" value="fretis gratis" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
            FRETE GRATIS
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="items[]" value="brinde" id="flexCheckChecked">
        <label class="form-check-label" for="flexCheckChecked">
            BRINDE
        </label>
    </div>

    <br><br>

    <h6 class="mt-3">Decrição</h6>
    <textarea name="descricao" id="" cols="30" rows="3"  minlength="30" maxlength="60" placeholder="max: 60 caracters">{{$produto->descricao}}
    </textarea>

    <br>
    <button class="mt-2 bnt btn-success" type="submit">Editar produto</button>
</form>







@endsection