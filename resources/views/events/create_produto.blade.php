@extends('layouts.main')

@section('title', 'CADASTRO PRODUTO')

@section('content')

<h1>Adicionar produto</h1>
<hr>

<form action="/events" method="POST" enctype="multipart/form-data">
    <!-- obrigatorio ultilizar no formulario @csrf-->
    <!-- @csrf ultilizado para proteção de dados -->
    @csrf
    <label class="mt-3" for="nome">Selecione a imagem do produto</label>
    <input type="file" name="image" required>
    <br>
    <label class="mt-3" for="nome">Nome do produto</label>
    <input type="text" name="titulo" required>
    <br>
    <label class="mt-3" for="preco">Preço</label>
    <input type="number" step="0.10" name="preco" required>
    <br>
    <label class="mt-3" for="data">Data que encerra a exibição</label>
    <input type="date" name="data">
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
    <textarea name="descricao" id="" cols="30" rows="3" required minlength="30" maxlength="60" placeholder="max: 60 caracters"></textarea>

    <br>
    <button class="mt-2 bnt btn-success" type="submit">Criar produto</button>
</form>







@endsection