<?php

use App\Http\Controllers\jsonController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

route::prefix('/json')->group(function(){

        route::get('pedidos', [jsonController::class, 'pedidos'])->name('pedidos');
        
        route::POST('produtos', [jsonController::class, 'pro'])->name('pro');

        route::POST('comprar', [jsonController::class, 'comprar'])->name('comprar');

        route::POST('consultacar', [jsonController::class, 'consultacar'])->name('consultacar');

        route::POST('qtdecarrinho', [jsonController::class, 'qtdecarrinho'])->name('qtdecarrinho');
    
});

route::get('user/{nome}', function($nome){
echo "seu nome é ".$nome;
});

route::get('user/{id}', function($id){
 echo "seu Id é ".$id;
})->where('id', '[0-9]+');
