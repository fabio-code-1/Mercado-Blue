@extends('layouts.main')

@section('title', 'PRODUTOS')

@section('content')


<!-- Conteudo -->
<section>
        <div class="row">
                <div class="col">
                        <h1>Produtos</h1>
                </div>
        </div>



        <div class="row " style="text-align: center;">

                @foreach($produto as $product)

                <div class="col-3 mt-4">

                        <div class="card " style="width: 270px;  ">
                                <img class="card-img-top" src="../img/events/{{$product->image}}" alt="" height="200px">
                                <!--.card-img-top-->
                                <div class="card-body">
                                        <h6 class="card-title produtoTitle text-dark">{{$product->titulo}}</h6>
                                        <!-- //formatando data e exibindo data -->
                                        <mark>{{date('d/m/y', strtotime($product->created_at))}}</mark>
                                        <p class="card-text produto_subTitle text-dark" style="height: 80px;">{{$product->descricao}}</p>
                                        <p class="card-text text-danger">de: R$ <span style="text-decoration:line-through;">349.50</span>
                                        </p>
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

                <p class="mt-3"> {{$pagina->links()}}</p>

        </div>

</section>




@endsection