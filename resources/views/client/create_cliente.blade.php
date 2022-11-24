@extends('layouts.main')

@section('title', 'CADASTRO CLIENTE')

@section('content')

<section>

    <div class="row mt-4">
        <div class="col">
            <h1 class="text-center">Cadastro</h1>
            <hr class="mt-4">
        </div>
    </div>


    <h2 class="text-center">Preencha o formulario abaixo para cadastra-se na plataforma.</h2>
    <br>


    <!-- Formulario -->
    <form action="#" method="get">
        <div class="container">
            <div class="row">
                <div class="col">

                    <label for="nome"><b>Digite o nome completo</b></label>
                    <input type="text" class="form-control w-100" placeholder="Nome completo">
                    <br>

                    <label for="cpf"><b>CPF</b></label>
                    <input type="text" class="form-control w-100" placeholder="Digite seu CPF">
                    <br>

                    <label for="cep"><b>CEP</b></label>
                    <input type="text" class="form-control w-100" placeholder="Digite seu CEP">
                    <br>


                    <label for="endereco"><b>Endereço</b></label>
                    <input type="text" class="form-control w-100" placeholder="Digite seu endereço">
                    <br>



                    <label for="complemento"><b>Complemento</b></label>
                    <input type="text" class="form-control w-100" placeholder="digite o complemento">
                    




                </div>

                <div class="col">

                    <label for="bairro"><b>Bairro</b></label>
                    <input type="text" class="form-control w-100" placeholder="Digite seu bairro">
                    <br>

                    <label for="cidade"><b>Cidade</b></label>
                    <input type="text" class="form-control w-100" placeholder="Digite sua cidade">
                    <br>


                    <label for="estado"><b>Estado</b></label>
                    <input type="text" class="form-control w-100" placeholder="Digite seu estado">
                    <br>


                    <label for="email"><b>E-mail</b></label>
                    <input type="text" class="form-control w-100" placeholder="Digite seu e-mail">
                    <br>


                    <label for="senha"><b>Senha</b></label>
                    <input type="text" class="form-control w-100" placeholder="Digite sua senha">
                    <br>

                </div>
            </div>
            <button class=" btn-lg btn btn-primary form-control w-100">CADASTRAR</button>
        </div>
    </form>

</section>



@endsection