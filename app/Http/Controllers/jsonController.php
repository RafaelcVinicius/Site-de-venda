<?php

namespace App\Http\Controllers;

use App\Models\Carrinho;
use App\Models\Produtos;
use App\Models\Temp;
use App\Models\Vendas;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class jsonController extends Controller
{


    public function pro(Request $request){
       
       /* $temp = new Temp();
        $temp->camp1 = $request->email;
        $temp->save();*/

        $temp = Produtos::where('nome', 'like', '%'.$request->email.'%')->get();

        echo json_encode($temp);    
 
    }

    
    public function pedidos(){

        $g = Vendas::where('status', '<>', 'Cancelado')->select( DB::raw('cast(sum( valor ) as decimal(10)) as valor'),DB::raw('cast(created_at as date) as date' ) )->GROUPBY('date')->get();
            return json_encode($g);
    }



    public function comprar(Request $request){   

        if($request->id_user == null){
            $carrinho['Success'] = false;
            return json_encode($carrinho);
        }else{
            $db = Carrinho::where('id_user', $request->id_user)->where('id_produto', $request->id_produto)->where('status', 'ABERTO')->count();
            if(empty($db)){

                $venda = new Carrinho();        
                $venda->id_user = $request->id_user;
                $venda->id_produto = $request->id_produto;
                $venda->status = 'ABERTO';
                $venda->valor = $request->valor_un;
                $venda->qtde = $request->qtde;
                $venda->save();

            }else{
                $db = Carrinho::where('id_user', $request->id_user)->where('id_produto', $request->id_produto)->where('status', 'ABERTO')->first();
                $venda = Carrinho::find($db->id);
                $venda->qtde = $db->qtde + $request->qtde;
                $venda->valor = ($db->qtde + $request->qtde) * $request->valor_un;
                $venda->save();
            }
                $qtd = Carrinho::where('id_user', auth::id())->count();
                return json_encode($qtd);

        }

        
    }

}
