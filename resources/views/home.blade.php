@extends('layouts.main')

@section('title', 'HOME')

@section('content')


<!-- desenvolver html -->
<section>
    <!--Conteudo-->
    <div class="row mt-3">
        <div class="col col-sm-2">
            <!--Menu lateral-->
            <div class="list-group" style="text-align: center;">
                <li class="list-group-item list-group-item-primary barraLateral text-light"><b>Camisas</b>
                </li>
                <a href="#" class="list-group-item list-group-item-action text-primary">Masculinas</a>
                <a href="#" class="list-group-item list-group-item-action text-primary">Femininas}</a>
                <a href="#" class="list-group-item list-group-item-action text-primary">Personalizadas</a>
            </div>

            <div class="list-group mt-4" style="text-align: center;">
                <li class="list-group-item list-group-item-primary barraLateral text-light"><b>Calças</b></li>
                <a href="#" class="list-group-item list-group-item-action text-primary">Masculinas</a>
                <a href="#" class="list-group-item list-group-item-action text-primary">Femininas</a>
                <a href="#" class="list-group-item list-group-item-action text-primary">Estrangeiros</a>
            </div>

            <div class="list-group mt-4" style="text-align: center;">
                <li class="list-group-item list-group-item-primary barraLateral text-light"><b>Tenis</b></li>
                <a href="#" class="list-group-item list-group-item-action text-primary">Esporte</a>
                <a href="#" class="list-group-item list-group-item-action text-primary">Sociais</a>
                <a href="#" class="list-group-item list-group-item-action text-primary">Estrangeiros</a>
            </div>

            <div class="list-group mt-4" style="text-align: center;">
                <li class="list-group-item list-group-item-primary barraLateral text-light"><b>Infantil</b></li>
                <a href="#" class="list-group-item list-group-item-action text-primary">Masculino</a>
                <a href="#" class="list-group-item list-group-item-action text-primary">Feminino</a>
                <a href="#" class="list-group-item list-group-item-action text-primary">Estrangeiros</a>
            </div>

            <div class="list-group mt-4" style="text-align: center;">
                <li class="list-group-item list-group-item-primary barraLateral text-light"><b>Acessorios</b></li>
                <a href="#" class="list-group-item list-group-item-action text-primary">Masculino</a>
                <a href="#" class="list-group-item list-group-item-action text-primary">Feminino</a>
                <a href="#" class="list-group-item list-group-item-action text-primary">Outros</a>
            </div>

        </div>
        <div class="col mt-1">
            <header>

                <div id="carouselExampleCaptions" class="carousel slide " data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/img/camisas.png" class="d-block w-100 img-fluid" height="450px" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/img/calça.png" class="d-block w-100" height="450px" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/img/tênis.png" class="d-block w-100" height="450px" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

            </header>
            <!-- Produtos -->
            <section>
                <div class="row mt-4">
                    <div class="col">
                        <h1 style="text-align: center;">DESTAQUES</h1>
                    </div>
                </div>
                <div class="row " style="text-align: center;">


                    @foreach($produto as $product)


                    <div class="col-3 mt-4">
                        <div class="card" style="width: 250px;">
                            <img class="card-img-top" src="/img/events/{{$product->image}}" alt="" height="200px">
                            <!--.card-img-top-->
                            <div class="card-body">
                                <h6 class="card-title produtoTitle text-dark">{{$product->titulo}}</h6>

                                <mark>{{date('d/m/y', strtotime($product->created_at))}}</mark>

                                <p class="card-text produto_subTitle text-dark" style="height: 70px;">{{$product->descricao}}</p>
                                <p class="card-text text-danger">de: R$ <span style="text-decoration:line-through;">349.50</span></p>
                                <p class="card-text text-success">por: R$ <b>{{$product->preco}}</b></p>
                                <a class="btn btn-info card-link" href="/events/{{$product->id}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                    </svg>
                                    Detalhes</a>
                            </div>
                        </div>
                    </div>

                    
                    @endforeach

                    @if(count($produto) == 0)

                    <h3>NAO TEM PRODUTOS CADASTRADOS!</h3>

                    @endif
                    <p class="mt-3"> {{$produto->links()}}</p>
                </div>
            </section>


        </div>
    </div>
</section>

@endsection