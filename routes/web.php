<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Produto;
use App\Http\Controllers\CartChekout;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('cartCheckout.welcome');
});

Route::get('/index', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/produtoEstoque/novoProduto',[Produto\ProdutoController::class,'create'])->name('novoProduto');
    Route::resource('/produtoEstoque', 'Produto\ProdutoController');

    //Route::get('/produtoEstoque/novoProduto', 'Produto\ProdutoController@create')->name('novoProduto');


    Route::get('ecommerce',[CartChekout\CartCheckoutController::class,'welcome'])->name('ecommerce');
    Route::get('ecommerce/neworder',[CartChekout\CartCheckoutController::class,'create'])->name('nova.ordem');
    Route::get('ecommerce/neworder/checkout',[CartChekout\CartCheckoutController::class,'checkout'])->name('checkout');
    Route::post('commerce/neworder/checkout',[CartChekout\CartCheckoutController::class,'check'])->name('check');
    Route::get('ecommerce/finish',[CartChekout\CartCheckoutController::class,'comprafinalizada'])->name('comprafinalizada');
    Route::get('ecommerce/options',[CartChekout\CartCheckoutController::class,'opcaopagamento'])->name('opcaopagamento');

    //Route::get('dataDados',[App\Http\Controllers\TesteAPI\ExibicaoController::class,'receberLeituras'])->name('data');
    //Route::post('data_api',[App\Http\Controllers\TesteAPI\RetornoJSON::class,'retorno'])->name('retorno');
    Route::post('exibicao',[App\Http\Controllers\TesteAPI\ExibicaoController::class,'exibirDadosLeitura'])->name('exibirDadosLeitura');


    Broadcast::channel('leituras', function ($user) {
        return true; // Aqui você pode adicionar alguma lógica para autorizar ou restringir o acesso ao canal
    });


});

require __DIR__ . '/auth.php';
