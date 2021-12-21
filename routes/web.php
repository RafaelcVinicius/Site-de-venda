<?php

use App\Http\Controllers\admloginController;
use Illuminate\Support\Facades\Route;

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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('adm')->group(function () {
    Route::get('/', function(){
        return view('adm.indexadm');
    });
    
    route::get('/login', [admloginController::class, 'view'])->name('view');;
    route::post('/login', [admloginController::class, 'logar'])->name('logar');
    
});


route::prefix('home')->group(function(){
    Route::get('/', function(){
        return view('');
    });
});