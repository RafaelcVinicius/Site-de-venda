<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class excluirSession extends Controller
{
    public function excluir(Request $request){

        $venda[] = $request->id_produto;
        $venda[] = $request->valor_un;
        $venda[] = $request->qtde;
        
        $vendas[] = Session::get('vendas');
        unset($vendas[0][5]);
    
        dd($vendas);


        /*Session::forget('vendas');
        session::put('vendas', $vendas[]);*/
    
    }
}
