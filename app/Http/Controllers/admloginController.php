<?php

namespace App\Http\Controllers;

use App\Models\Admlogin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class admloginController extends Controller
{
    function view(){
    return view('adm.admlogin');
    }


    function logar(Request $request){
        $cnpjcpf = $request->input('cnpjcpf');
        $senha = $request->input('senha');

        $dadosadm  = admlogin::where('cnpjcpf',  $cnpjcpf)->first();


        if(!empty($dadosadm->cnpjcpf)){
           if( $dadosadm->senha == $senha){
                Session::put('nome', $dadosadm->nome);
                return redirect()->route('index');
            }else{
                echo "Senha errado";
            }
        }else{
            echo "CNPJ/CPF errado";
        }

    }
}
