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

Route::get('/dashboard', [ProdutoController::class, 'dashboard'])->middleware('auth');
