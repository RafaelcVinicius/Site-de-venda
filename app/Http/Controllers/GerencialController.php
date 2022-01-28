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
         date_default_timezone_set('America/Sao_Paulo');
         
         $pedidos = Vendas::get();


    // Valor do dia

         $dia = DB::table('vendas')
         ->select(DB::raw('sum(valor) as valor'))
         ->where('status', '<>', 'Cancelado')
         ->where('created_at', date("Y-m-d"))
         ->first();

        /* if($dia == null){
             $dia =0;
         }*/

    // Valor semana

        $semana_incio = date("Y-m-d", strtotime('-6 days' ,strtotime('Saturday this week')));   
        $semana_final = date("Y-m-d", strtotime('Saturday this week'));

        $semana = DB::table('vendas')
        ->select(DB::raw('sum(valor) as valor'))
        ->where('status', '<>', 'Cancelado')
        ->whereBetween('created_at', [$semana_incio, $semana_final])
        ->first();

       /* if($dia == null){
            $dia =0;
        }*/

    // Valor Mensal

        $data_incio = mktime(0, 0, 0, date('m') , 1 , date('Y'));
        $data_fim = mktime(23, 59, 59, date('m'), date("t"), date('Y'));
        $data_incio = date('Y-m-d',$data_incio);
        $data_fim = date('Y-m-d', $data_fim);

        $mes = DB::table('vendas')
        ->select(DB::raw('sum(valor) as valor'))
        ->where('status', '<>', 'Cancelado')
        ->whereBetween('created_at', [$data_incio, $data_fim])
        ->first();

      /*  if($dia == null){
            $dia = 0;
        } */
       
      return view('adm.admsite')->with('pedidos', $pedidos)->with('semana', $semana)->with('mes',$mes)->with('dia',$dia);;

    }



}
