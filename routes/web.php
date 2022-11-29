<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\WelcomeController;



//Chamar o metodo index de controller  ///leva ate a home
Route::get('/', [HomeController::class, 'index']);

//Chamar o metodo index de controller  ///leva pagina welcome
Route::get('/welcome', [WelcomeController::class, 'index']);

//Chamar o metodo index de controller ProdutoController ///leva pagina produtos
Route::get('/produtos', [ProdutoController::class, 'index']);

//Chamar o metodo index de controller ProdutoController ///leva pagina de formulario para criar produtos
Route::get('/events/create_produto', [ProdutoController::class, 'create'])->middleware('auth');

//criar um produto no banco de dados
Route::post('/events', [ProdutoController::class, 'store']);

//apresenta o detalhe de cada produto
Route::get('/events/{id}', [ProdutoController::class, 'show']);

//Routa que deleta um produto criado pelo usuario
Route::delete('/events/{id}', [ProdutoController::class, 'destroy'])->middleware('auth');

//Routa que manda os dados de um produto criado pelo usuario para a view wdit_produto
Route::get('/events/edit/{id}', [ProdutoController::class, 'edit'])->middleware('auth');

//Routa que atualiza um produto criado pelo usuario
Route::put('/events/update/{id}', [ProdutoController::class, 'update'])->middleware('auth');

//Apresenta a dashboard do usuario
Route::get('/dashboard', [ProdutoController::class, 'dashboard'])->middleware('auth');

//Rota para carrinho
Route::post('/events/join/{id}', [ProdutoController::class, 'joinCarrinho'])->middleware('auth');