<?php

use App\Http\Controllers\admloginController;
use App\Http\Controllers\ControllerProdutos;
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

Route::get('/', function () {
    return view('index');
});
// Logar user 
 
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Logar ADM

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


//não definido

route::prefix('home')->group(function(){
    Route::get('/', function(){
        return view('');
    });
});