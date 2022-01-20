<?php

namespace App\Http\Controllers;

use App\Models\Carrinho;
use App\Models\enderecouser;
use App\Models\Itemvenda;
use App\Models\Vendas;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class controllerFinalizar extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

    public function finalizando(){
        $vendas = Carrinho::where('id_user', '=', auth::id())->where('status', '=', 'ABERTO')->get();
        $subtotal = Carrinho::where('id_user', auth::id())->where('status', 'ABERTO')->selectRaw("SUM(valor) as valor")->first();
        $enderecos = Enderecouser::where('id_user', auth::id())->get();
      return view('site.venda.finalizando')->with('vendas', $vendas)->with('subtotal', $subtotal)->with('enderecos', $enderecos);
    }


  public function finalizar(Request $request){

        $pedido = new Vendas();
        $pedido->id_user = auth::id();
        $pedido->valor = $request->subtotal;
        $pedido->status = 'Aberto';

      if($request->tipopedido == 'retirada'){
        $pedido->tipopedido = 'Retirada';
        $pedido->especie = 'Dinheiro';
        $pedido->valorpago = $request->subtotal;
        $pedido->troco = 0.00;
      }
      else{
        $pedido->tipopedido = 'entrega';
        $pedido->id_endereco = $request->id_endereco; 

        if($request->especie == 'dinheiro' ){
          $pedido->especie = 'Dinheiro';
          $pedido->valorpago = $request->valorpago;
          $pedido->troco =  ($request->valorpago - $request->subtotal);
        }
        else{
          $pedido->especie = 'Cartão';
          $pedido->valorpago = $request->subtotal;
          $pedido->troco =  0.00;
        }
      }
        $pedido->save();

        $itens = Carrinho::where('id_user', auth::id())->get();

        foreach($itens as $item){
          $itenspedido = new Itemvenda();
          $itenspedido->id_venda = $pedido->id;
          $itenspedido->id_produto = $item->id_produto;
          $itenspedido->qtde = $item->qtde;
          $itenspedido->valor = $item->valor;
          $itenspedido->save();

          $del = Carrinho::find($item->id);
          $del->delete();

        }

        return redirect()->route('meuspedidos');


  }




}
