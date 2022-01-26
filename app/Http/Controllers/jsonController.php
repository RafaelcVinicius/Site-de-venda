<?php

namespace App\Http\Controllers;

use App\Models\Temp;
use App\Models\Vendas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class jsonController extends Controller
{


    public function pro(Request $request){
       
        $temp = new Temp();
        $temp->camp1 = $request->email;
        $temp->save();

        echo json_encode($request);    
 
    }

    
    public function pedidos(){

        $g = Vendas::where('status', '<>', 'Cancelado')->select( DB::raw('cast(sum( valor ) as decimal(10)) as valor'),DB::raw('cast(created_at as date) as date' ) )->GROUPBY('date')->get();
            return json_encode($g);
    }




}
