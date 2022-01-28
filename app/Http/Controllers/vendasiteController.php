<?php

namespace App\Http\Controllers;

use App\Models\Carrinho;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class vendasiteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendas = Carrinho::where('id_user', '=', auth::id())->where('status', '=', 'ABERTO')->get();

        $subtotal = Carrinho::where('id_user', auth::id())->where('status', 'ABERTO')->selectRaw("SUM(valor) as valor")->first();

       return view('site.venda.carrinho')->with('vendas', $vendas)->with('subtotal', $subtotal);
        
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            if($request->qtde == null){
    
            }else{
                $db = Carrinho::where('id_user', auth::id())->where('id_produto', $request->id_produto)->where('status', 'ABERTO')->count();
                if(empty($db)){

                $venda = new Carrinho();        
                $venda->id_user = auth::id();
                $venda->id_produto = $request->id_produto;
                $venda->status = 'ABERTO';
                $venda->valor = $request->valor_un;
                $venda->qtde = $request->qtde;
                $venda->save();

                }else{
                    $db = Carrinho::where('id_user', auth::id())->where('id_produto', $request->id_produto)->where('status', 'ABERTO')->first();
                    $venda = Carrinho::find($db->id);
                    $venda->qtde = $db->qtde + $request->qtde;
                    $venda->valor = ($db->qtde + $request->qtde) * $request->valor_un;
                    $venda->save();
                }
                        // $venda = ['id_produto'=> $request->id_produto, 'valor_un' => $request->valor_un, 'qtde'=> $request->qtde];
                        //Session::push('vendas', $venda);


                   return redirect()->route('carrinho.index');
            }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = Carrinho::find($id);
        $del->delete();
        return redirect()->back();
    }
}
