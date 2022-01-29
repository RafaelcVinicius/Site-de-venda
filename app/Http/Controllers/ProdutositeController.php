<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Http\Request;

class ProdutositeController extends Controller
{

    public function index(Request $request){
        $produtos = Produtos::where('nome', 'like', '%'.$request->busca.'%')->get();
       return view('site.produtos.produtos')->with('produtos', $produtos);
    }

    public function produto($nome){

        $produto = Produtos::where('nome', '=', $nome)->first();

        return view('site.produtos.produto')->with('produto', $produto);

    }

    
}
