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

        $g = Vendas::where('status', '<>', 'Cancelado')->select( DB::raw('cast(sum( valor ) as decimal(10)) as valor'),DB::raw('cast(created_at as date) as date' ) )->GROUPBY('date')->get();
       //dd($g);
     // echo 'aqui'.$g[2]->valor;
         return view('adm.admsite')->with('pedidos', $pedidos)->with('g', $g);

    }



}
