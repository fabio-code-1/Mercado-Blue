<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//chamar model Cliente
use App\Models\Cliente;
use App\Models\User;
use App\Models\Produto;
use App\Models\Comentario;
class WelcomeController extends Controller
{
    public function index()
    {
        //Chamando todos os eventos da model Cliente
        // $events = Cliente::all();
        // $eventoUser = User::all();

    
        return view('welcome', [
            //enviando todos os enventos para view
        ]);
    }

    public function show($id)
    {
        $user = User::where('id', $id)->first();

        $comentario = $user->comentario()->get();
        
       

        return view('welcome', [
            'user' => $user,
            'comentario' => $comentario
        ]);
    }
}
