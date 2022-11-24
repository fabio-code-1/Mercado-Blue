<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(Request $request){
        
        $produto= Produto::all();

        $produto= Produto::simplePaginate(4);
        

       

        $dados = [
            
            'produto'=>$produto
            
        ];

        return view('home',$dados);
    }
}
