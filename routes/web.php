<?php

use App\Http\Controllers\ProfileController;
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
    Route::post('ecommerce/neworder/checkout',[CartChekout\CartCheckoutController::class,'check'])->name('check');



});

require __DIR__ . '/auth.php';
