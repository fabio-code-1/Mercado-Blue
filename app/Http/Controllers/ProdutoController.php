<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\User;

class ProdutoController extends Controller
{


    public function index(Request $request)
    {

        // //opção 1 pegar dados get da url
        // $dados = $request->all();
        // $produto = $request['produto'];
        // $preco = $request['preco'];
        // $categoria = $request['categoria'];

        //opção 2 pegar dados get da url
        // $produto = $request->query('produto');
        // $preco = $request->query('preco');
        // $categoria = $request->query('categoria');

        //opção 3 pegar dados post
        // $produto = $request->input('produto');
        // $preco = $request->input('preco');
        // $categoria = $request->input('categoria');

        //opção 4 é a mais facil metodo poost
        // $dados = [
        //     'produto'=>$request->input('produto'),
        //     'preco'=>$request->input('preco'),
        //     'categoria'=>$request->input('categoria')
        // ];


        //Chamando todos os eventos da model Produto
        $search = request('search');

        $pagina = Produto::simplePaginate(8);

        if ($search) {

            $produto = Produto::where([
                ['titulo', 'like', '%' . $search . '%']

            ])->get();
        } else {
            $produto = Produto::simplePaginate(8);
        }

        return view('/produtos', [
            'produto' => $produto,
            'pagina' => $pagina,
        ]);
    }


    //Pagina de crair noovos produtos
    public function create()
    {

        return view('/events/create_produto');
    }

    //Cadastrar novo produto no BD
    public  function store(Request $request)
    {
        $obProduto = new Produto;

        $obProduto->titulo = $request->titulo;
        $obProduto->preco = $request->preco; //foi feito uma ateração no model
        $obProduto->descricao = $request->descricao;
        $obProduto->items = $request->items; //foi feito uma ateração no model


        // image upload
        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime('now')) . "." . $extension;

            $requestImage->move(public_path('img/events'), $imageName);

            $obProduto->image = $imageName;
        }

        $user = auth()->user();
        $obProduto->user_id = $user->id;

        $obProduto->save();

        return redirect('/produtos')->with('msg', 'Produto criado com sucesso!');
    }


    public function show($id)
    {
        $product = Produto::findOrFail($id);

        $produtoWoner = User::where('id', $product->user_id)->first()->ToArray();


        return view('events.create_view_produto', [
            'product' => $product,
            'produtoWoner' => $produtoWoner,
          
        ]);
    }

    public function dashboard()
    {
        $user = auth()->user();

        $produto = $user->produtos;

        return view('events.dashboard', ['produto' => $produto]);
    }

    public function destroy($id)
    {

        Produto::findOrFail($id)->delete();

        return redirect('/dashboard')->with('msg', 'Produto excluido com sucesso!');
    }

    public function edit($id)
    {
        $produto = Produto::findOrFail($id);

        return view('events.edit_produto', ['produto' => $produto]);
    }

    public function update(Request $request)
    {
        $data = $request->all();


        // image upload
        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime('now')) . "." . $extension;

            $requestImage->move(public_path('img/events'), $imageName);

            $data['image'] = $imageName;
        }

        Produto::findOrFail($request->id)->update($data);

        return redirect('/dashboard')->with('msg', 'Produto editado com sucesso!');
    }

    public function joinSorteio($id)
    {
        $user = auth()->user();

        $user->eventsAsParticipant()->attach($id);

        $produto = Produto::findOrFail($id);

        return redirect('/dashboard')->with('msg', $produto->titulo . ': participando do torneio');
    }


}
