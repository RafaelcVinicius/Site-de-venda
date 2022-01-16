<?php

namespace App\Http\Controllers;

use App\Models\Carrinho;
use App\Models\enderecouser;
use App\Models\Vendas;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class controllerFinalizar extends Controller
{
    public function finalizando(){
        $vendas = Carrinho::where('id_user', '=', auth::id())->where('status', '=', 'ABERTO')->get();
        $subtotal = Carrinho::where('id_user', auth::id())->where('status', 'ABERTO')->selectRaw("SUM(valor) as valor")->first();
        $enderecos = Enderecouser::where('id_user', auth::id())->get();
     
        $nende = count($enderecos);
      return view('site.venda.finalizando')->with('vendas', $vendas)->with('subtotal', $subtotal)->with('enderecos', $enderecos)->with('nende',$nende);
    }


  public function finalizar(Request $request){

      if($request->tipopedido == 'retirada'){
        
        $retirada = new Vendas();
        $retirada->user = auth::id();
        $retirada->valor = $request->subtotal;
        $retirada->tipopedido = 'retirada';
        $retirada->id_endereco = 0;
        $retirada->especie = 'dinheiro';
        $retirada->valorpago = $request->subtotal;
        $retirada->troco = '0,00';
      }
      else{
        if($request->especie == 'dinheiro' ){
          $entrega = new Vendas();
          $entrega->user = auth::id();
          $entrega->valor = $request->subtotal;
          $entrega->tipopedido = 'entrega';
          $entrega->id_endereco = $request->id_endereco;
          $entrega->especie = 'dinheiro';
          $entrega->valorpago = $request->valorpago;

        }
        else{
          $entrega = new Vendas();
        }
        
      }
  }
}
