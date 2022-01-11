<?php

namespace App\Http\Controllers;

use App\Models\Carrinho;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class controllerFinalizar extends Controller
{
    public function finalizando(){
        $vendas = Carrinho::where('id_user', '=', auth::id())->where('status', '=', 'ABERTO')->get();

        $subtotal = Carrinho::where('id_user', auth::id())->where('status', 'ABERTO')->selectRaw("SUM(valor) as valor")->first();

       return view('site.venda.finalizando')->with('vendas', $vendas)->with('subtotal', $subtotal);
    }
}
