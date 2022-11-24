<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\LoginController;


//Chamar o metodo index de controller  ///leva ate a home
Route::get('/', [HomeController::class, 'index']);

//Chamar o metodo index de controller  ///leva pagina welcome
Route::get('/welcome', [WelcomeController::class, 'index']);

//Chamar o metodo index de controller ProdutoController ///leva pagina produtos
Route::get('/produtos', [ProdutoController::class, 'index']);

//Chamar o metodo index de controller ProdutoController ///leva pagina de formulario para criar produtos
Route::get('/events/create_produto', [ProdutoController::class, 'indexCreate']);

//criar um produto no banco de dados
Route::post('/events', [ProdutoController::class, 'createProduct']);

//apresenta o detalhe de cada produto
Route::get('/events/{id}', [ProdutoController::class, 'show']);


//apresenta o formulario para cadastrar cliente
Route::get('/client/create_cliente', [ClienteController::class, 'formCliente']);


//Chamar o metodo index de controller ProdutoController ///leva pagina produtos
Route::get('/login', [LoginController::class, 'index']);


