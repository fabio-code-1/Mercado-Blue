<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//chamar model Cliente
use App\Models\Cliente;
use App\Models\User;
use App\Models\Produto;

class WelcomeController extends Controller
{
    public function index()
    {
        //Chamando todos os eventos da model Cliente
        // $events = Cliente::all();
        // $eventoUser = User::all();

        $eventoProduto = Produto::simplePaginate(1);
        
        return view('welcome', [
            //enviando todos os enventos para view
   
            'produto'=>$eventoProduto
        ]);
    }
}
