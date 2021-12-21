<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admloginController extends Controller
{
    function view(){
    return view('adm.admlogin');
    }


    function logar(Request $request){
        $cnpjcpf = $request->input('cnpjcpf');

        echo $cnpjcpf;
    }
}
