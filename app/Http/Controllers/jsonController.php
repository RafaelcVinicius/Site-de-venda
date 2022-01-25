<?php

namespace App\Http\Controllers;

use App\Models\Vendas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class jsonController extends Controller
{
 public function pedidos(){

    $g = Vendas::where('status', '<>', 'Cancelado')->select( DB::raw('cast(sum( valor ) as decimal(10)) as valor'),DB::raw('cast(created_at as date) as date' ) )->GROUPBY('date')->get();
         return json_encode($g);
 }
}
