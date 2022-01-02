<?php

namespace App\Http\Controllers;

use App\Models\Imagemproduto;
use App\Models\Produtos;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ControllerProdutos extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        if(Session::get('nome') == null){
            return redirect()->route('view');
         }
        $produtos = Produtos::get();
        return view('adm.produtos.admprodutos')->with('produtos', $produtos); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Session::get('nome') == null){
            return redirect()->route('view');
         }
       return view('adm.produtos.cadastrarproduto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Session::get('nome') == null){
            return redirect()->route('view');
         }

        $Produtos = new Produtos();
        $Produtos->nome = $request->input('nome');
        $Produtos->valor = $request->input('valor');
        $Produtos->qtde = $request->input('qtde');
        $Produtos->save();

        if(isset($request->img)){

            $file = $request->allFiles()['img'];
            
            $imagem = new imagemproduto();
            $imagem->id_produto = $Produtos->id;
            $imagem->path = $file->store('produtos');
            $imagem->save();
        }

        return redirect()->route('produtos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(Session::get('nome') == null){
            return redirect()->route('view');
         }
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
        if(Session::get('nome') == null){
            return redirect()->route('view');
         }
        $produto = Produtos::where('id', $id)->first();

        return view('adm.produtos.editarproduto')->with('produto', $produto);
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
         if(Session::get('nome') == null){
            return redirect()->route('view');
         }

        $produto = Produtos::find($id);
        $produto->nome = $request->input('nome');
        $produto->valor = $request->input('valor');
        $produto->qtde = $request->input('qtde');
        $produto->save();

           if(isset($request->img)){ 

             if(imagemproduto::where('id_produto', '=', $id)->count() == 1 ){

                    $imagem = imagemproduto::where('id_produto', '=', $id)->first();
                    
                    Storage::disk('public')->delete($imagem['path']);

                    $path = $request->file('img')->store('produtos', 'public');
            
                    $imagem->path = $path;
                    $imagem->save();
                }else{

                    $path = $request->file('img')->store('produtos', 'public');

                    $imagem = new imagemproduto();
                    $imagem->id_produto = $produto->id;
                    $imagem->path =  $path;
                    $imagem->save();
                }
           }
            
           /* $img = Imagemproduto::where('id_produto', '=', $id)->first();
            if()
            Storage::disk('public')->delete($img['path']);


            $imagemdel = Imagemproduto::find($img['id']);
            $imagemdel->delete();


            $file = $request->allFiles()['img'];
         
            $imagem = new imagemproduto();
            $imagem->id_produto = $produto->id;
            $imagem->path = $file->store('produtos');
            $imagem->save();*/
       

        return redirect()->route('produtos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          if(Session::get('nome') == null){
            return redirect()->route('view');
         }


         $del = Produtos::find($id);
         $del->delete();

         return redirect()->route('produtos.index');

    }
}
