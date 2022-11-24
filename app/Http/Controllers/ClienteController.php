<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function formCliente(){

        return view('/client/create_cliente');
    }
}
