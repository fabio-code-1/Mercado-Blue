@extends('layouts.main')

@section('title', $product->titulo)

@section('content')

<section>
    <div class="row m-3">

        <div class="col-sm-6" style="width:30%">

            <img class=" w-100 h-100 img-fluid img-thumbnail" src="/img/events/{{ $product->image }}" alt="{{ $product->titulo }}">
            <figcaption class="blockquote-footer mt-1">
                Autor: <cite title="Source Title">{{$produtoWoner['name']}}</cite>
            </figcaption>
            <figcaption class="blockquote-footer ">
                Data de criação: <cite title="Source Title">{{date('d/m/y', strtotime($product->created_at))}}</cite>
            </figcaption>
            <figcaption class="blockquote-footer">
                Data de encerramento: <cite title="Source Title">{{date('d/m/y', strtotime($product->data))}}</cite>
            </figcaption>
        </div>



        <div class="col">
            <h1 class="">{{$product->titulo}}</h1>
            <p>{{ $product->descricao }}</p>
            <p class="card-text">de: R$
                <span style="text-decoration:line-through;">649.50</span>
            </p>
            <p class="card-text">por: R$ <b>{{ $product->preco }}</b></p>


            @if($product->items != NULL)
            <ul>
                @foreach( $product->items as $item )
                <li style="list-style-type:none; display:flex;">
                    <h5>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16">
                            <path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v12zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1z" />
                        </svg>
                        {{$item}}
                    </h5>
                </li>
                @endforeach
            </ul>
            @endif

            <form action="/events/join/{{$product->id}}" method="post">
                @csrf
                <a href="/events/join/{{$product->id}}" class="btn btn-success" onclick="event.preventDefault(); this.closest('form').submit();">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16" style="position: relative; top: -3px;">
                        <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                    </svg>
                    Adicionar ao carrinho</a>
            </form>

            <div class="input-group flex-nowrap  w-50">
                <span class="input-group-text" id="addon-wrapping">Quantidade</span>
                <input type="number" class="form-control" placeholder="Exemplo: 1" aria-label="
                            aria-describedby=" addon-wrapping">


                <button class="btn btn-success" type="button" id="button-addon2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16" style="position: relative; top: -3px;">
                        <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                    </svg>

                    Adicionar ao carrinho</button>
            </div>

            <br>
            <p><b>Disponiblidade: </b>em Estoque</p>
            <br>

            <div class="input-group flex-nowrap  w-50">
                <span class="input-group-text" id="addon-wrapping">Frete</span>
                <input type="number" class="form-control" placeholder="CEP" aria-label="
                            aria-describedby=" addon-wrapping">

                <button class="btn btn-secondary" type="button" id="button-addon2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z" />
                        <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z" />
                    </svg>

                    Calcular</button>
            </div>

        </div>
    </div>
</section>




<section id="decricao">
    <div class="row mt-5">
        <!-- descrição -->
        <div class="col">
            <h2 class="text-center">DESCRIÇÃO</h2>
            <hr>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi velit eligendi alias rem
                quisquam ducimus error dolor saepe dignissimos esse ad laboriosam autem ab laudantium
                pariatur dolorem, amet optio animi?
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita facere mollitia aut sint
                velit, voluptate, officia soluta ipsa officiis veritatis saepe dolores perferendis nemo est
                a cumque, distinctio rerum tempore.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, ad! Corporis officiis
                animi unde reiciendis minima cumque tenetur quasi facilis earum perspiciatis? Ad, sit
                adipisci! Totam soluta nostrum libero dolorem.
            </p>

            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi velit eligendi alias rem
                quisquam ducimus error dolor saepe dignissimos esse ad laboriosam autem ab laudantium
                pariatur dolorem, amet optio animi?
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita facere mollitia aut sint
                velit, voluptate, officia soluta ipsa officiis veritatis saepe dolores perferendis nemo est
                a cumque, distinctio rerum tempore.
                adipisci! Totam soluta nostrum libero dolorem.
            </p>

            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi velit eligendi alias rem
                quisquam ducimus error dolor saepe dignissimos esse ad laboriosam autem ab laudantium
                pariatur dolorem, amet optio animi?
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita facere mollitia aut sint
                velit, voluptate, officia soluta ipsa officiis veritatis saepe dolores perferendis nemo est
                a cumque, distinctio rerum tempore.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, ad! Corporis officiis
                animi unde reiciendis minima cumque tenetur quasi facilis earum perspiciatis? Ad, sit
                adipisci! Totam soluta nostrum libero dolorem.
            </p>

            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi velit eligendi alias rem
                quisquam ducimus error dolor saepe dignissimos esse ad laboriosam autem ab laudantium
                pariatur dolorem, amet optio animi?
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita facere mollitia aut sint
                velit, voluptate, officia soluta ipsa officiis veritatis saepe dolores perferendis nemo est
                a cumque, distinctio rerum tempore.
                adipisci! Totam soluta nostrum libero dolorem.
            </p>
            <hr>
        </div>
    </div>
</section>

<section id="detalhes">
    <!-- Detalhes -->
    <div class="container">
        <div class="row mt-3">
            <div class="col">

                <table class="table table-striped table-bordered ">
                    <thead class="text-light">
                        <tr>
                            <th>Peso</th>
                            <th>Largura</th>
                            <th>Altura</th>
                            <th>Comprimento</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-light">
                            <td>1kg</td>
                            <td>100cm</td>
                            <td>200cm</td>
                            <td>30cm</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<section id="coments">
    <div class="container">
        <div class="row mt-3">
            <div class="col">
                <div class="card " style="width:100%; overflow: auto; height: 290px;">
                    <h2 class="card-header text-light" style="background-color: rgb(59, 59, 94); text-align: center;">
                        Avaliações dos clientes
                    </h2>
                    <div class="card-body">

                        <!-- comentarios -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="form">
    <div class="container">
        <form action="" method="post">
            <div class="form-group">
                <h5 class="mt-3">Comentario</h5>
                <div class="form-floating">
                    <textarea class="form-control" name="comentario" placeholder="Leave a comment here" id="comentario" style="height: 100px"></textarea>
                    <label for="comentario">Digite seu comentario...</label>
                </div>

            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary mt-3">Enviar</button>
            </div>
        </form>
    </div>
</section>



@endsection