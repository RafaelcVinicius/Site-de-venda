<?php

namespace App\Http\Controllers;

use App\Models\Vendas;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GerencialController extends Controller
{
    function index(){
        if(Session::get('nome') == null){
            return redirect()->route('view');
         }

         $pedidos = Vendas::get();

        return view('adm.admsite')->with('pedidos', $pedidos);
    }

}
