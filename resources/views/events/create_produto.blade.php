@extends('layouts.main')

@section('title', 'CADASTRO PRODUTO')

@section('content')

<div class="row">
    <div class="col">
        <h1 class="text-center">Adicionar produto</h1>
        <hr>
    </div>
</div>



<form action="/events" method="POST" enctype="multipart/form-data">
    <!-- obrigatorio ultilizar no formulario @csrf-->
    <!-- @csrf ultilizado para proteção de dados -->
    @csrf
    <div class="d-grid gap-2 col-10 mx-auto bg-secondary" style="border-radius: 10px;">
        <div class="mx-5 my-2">
            <div class="row">
                <div class="col">
                    <label class="mt-3" for="nome"><b>Selecione a imagem do produto</b></label><br>
                    <input type="file" name="image" class="form-control" required>
                </div>
                <div class="col">
                    <label class="mt-3" for="nome"><b>Nome do produto</b></label><br>
                    <input type="text" name="titulo" class="form-control" required placeholder="EX: camiseta slin">
                </div>
                <div class="col">
                    <label class="mt-3" for="preco"><b>Preço</b></label><br>
                    <input type="number" step="0.01" name="preco" class="form-control" required placeholder="EX: 25.95">
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label class="mt-3" for="data"><b>Data que encerra a exibição</b></label><br>
                    <input type="date" name="data" class="form-control">
                </div>

                <div class="col">
                    <h6 class="mt-3"><b>Decrição</b></h6>
                    <textarea class="form-control" name="descricao" id="" cols="30" rows="3" required minlength="30" maxlength="60" placeholder="max: 60 caracters"></textarea>
                </div>

                <div class="col">
                    <br>
                    <b>Adicionais</b>
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
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled" disabled>
                        <label class="form-check-label" for="flexCheckDisabled">
                            Disabled checkbox
                        </label>
                    </div>
                </div>



            </div>


            <div class="row">


            </div>




            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="mt-3 bnt btn-success" type="submit">Criar produto</button>
            </div>
        </div>
    </div>
</form>








@endsection