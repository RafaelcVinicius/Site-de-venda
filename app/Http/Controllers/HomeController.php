<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use App\Models\Vendas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }
*/
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $produtos = Produtos::get();
        return view('site.site')->with('produtos', $produtos);
    }


    public function meuspedidos(){

        $pedidos = Vendas::where('id_user', Auth::id())->get();
        
        return view('site.user.meuspedidos')->with('pedidos', $pedidos);
    }
}
