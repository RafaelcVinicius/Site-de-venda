<?php

namespace App\Http\Controllers;

use App\Models\Carrinho;
use App\Models\enderecouser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class controllerFinalizar extends Controller
{
    public function finalizando(){
        $vendas = Carrinho::where('id_user', '=', auth::id())->where('status', '=', 'ABERTO')->get();

        $subtotal = Carrinho::where('id_user', auth::id())->where('status', 'ABERTO')->selectRaw("SUM(valor) as valor")->first();

        $enderecos = Enderecouser::where('id_user', auth::id())->get();
     
      return view('site.venda.finalizando')->with('vendas', $vendas)->with('subtotal', $subtotal)->with('enderecos', $enderecos);
    }
}
