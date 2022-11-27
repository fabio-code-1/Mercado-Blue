@extends('layouts.main')

@section('title', 'DASHBOARD')

@section('content')

<div class="col-md-10 offset-md-1 mt-2">
    <h1>Meus Produtos</h1>
    <hr>
    <div class="row">
        <div class="col">
            @if(count($produto) > 0)

            <table id="tabela-dashboard" class="table table-hover table-dark table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Vendido</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($produto as $product)
                    <tr>
                        <td>{{$loop->index + 1}}</td>
                        <td><a class="link-info" href="/events/{{ $product->id }}">{{ $product->titulo }}</a></td>
                        <td>0</td>
                        <td>
                            <a href="#" class="btn btn-warning">Editar</a>

                            <form action="/events/{{ $product->id }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Deletar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
        @else
        <p>Você ainda não criou nenhum produto! <a href="/events/create_produto">Criar produto</a> </p>
        :@endif
    </div>
</div>
</div>



@endsection