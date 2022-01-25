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

      /*  $g = Vendas::where('status', '<>', 'Cancelado')->select( DB::raw('cast(sum( valor ) as decimal(10)) as valor'),DB::raw('cast(created_at as date) as date' ) )->GROUPBY('date')->get();
        data: ["<?php echo $g[0]->valor ?>", "<?php echo $g[1]->valor ?>", "<?php echo $g[2]->valor ?>"],
        labels: ["<?php echo date('d/M/', strtotime($g[2]->date)) ?>", "<?php echo date('d/M/', strtotime($g[1]->date)) ?>", "<?php echo date('d/M/', strtotime($g[2]->date)) ?>"],
        */
        return view('adm.admsite')->with('pedidos', $pedidos);

    }



}
