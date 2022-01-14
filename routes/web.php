<?php

use App\Http\Controllers\admloginController;
use App\Http\Controllers\controllerFinalizar;
use App\Http\Controllers\ControllerProdutos;
use App\Http\Controllers\EnderecoUser;
use App\Http\Controllers\excluirSession;
use App\Http\Controllers\ProdutositeController;
use App\Http\Controllers\vendasiteController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Logar user 
 
Auth::routes();


route::prefix('/')->group(function () {

    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/home', function(){
        return redirect()->route('home');
    });

    route::prefix('produto')->group(function () {
        route::get('/', [ProdutositeController::class, 'index'])->name('produtos');
        route::get('/{nome}', [ProdutositeController::class, 'produto'])->name('produto');
    });

    route::resource('/carrinho', vendasiteController::class);

    route::post('/excluir', [excluirSession::class, 'excluir'])->name('excluir');

    Route::prefix('finalizar')->group(function(){
        Route::get('/', [controllerFinalizar::class, 'finalizando'])->name('finalizando');
        Route::Post('/', [controllerFinalizar::class, 'finalizar'])->name('finalizar');
    });

    Route::resource('endereco', [EnderecoUser::class]);
});






// ------------- Logar ADM --------------

Route::prefix('adm')->group(function () {

    Route::get('/', function(){
        if(Session::get('nome') <> null){
        return view('adm.indexadm');
        }else{
            return redirect()->route('view');
        }
    })->name('index');
    
    route::get('/login', [admloginController::class, 'view'])->name('view');
    route::post('/login', [admloginController::class, 'logar'])->name('logar');
    route::get('/logout', [admloginController::class, 'sair'])->name('sair');
    route::get('/site', [admloginController::class, 'site'])->name('site');
    route::resource('/produtos', ControllerProdutos::class);

});


