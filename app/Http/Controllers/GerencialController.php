<?php

namespace App\Http\Controllers;

use App\Models\Vendas;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GerencialController extends Controller
{
    function index(){
        if(Session::get('nome') == null){
            return redirect()->route('view');
         }

         $pedidos = Vendas::get();

       $tudo = Vendas::where('status', '<>', 'Cancelado')->select( DB::raw('cast(sum( valor ) as decimal(10)) as valor'))->get();
       //$mes = Vendas::where('status', '<>', 'Cancelado')->where(DB::raw('MONTH(created_at)','=', date('m'))->where(DB::raw('YEAR(created_at)','=', date('Y')))->select( DB::raw('cast(sum( valor ) as decimal(10)) as valor'))->get();
    $mes = Vendas::select(DB::raw('SELECT SUM(valor) FROM vendas WHERE MONTH(created_at) = 1 and YEAR(created_at) = 2022'));
DD($mes);

       // return view('adm.admsite')->with('pedidos', $pedidos)->with('$tudo', $tudo);

    }



}
