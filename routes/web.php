<?php

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


Route::get('/',[\App\Http\Controllers\PrincipalController::class,'Principal'])->name('site.index');
Route::get('/contato',[\App\Http\Controllers\ContatoController::class,'contato'])->name('site.contato');
Route::post('/contato',[\App\Http\Controllers\ContatoController::class,'salvar'])->name('site.contato');

Route::get('/sobre-nos',[\App\Http\Controllers\SobreNosController::class,'sobreNos'])->name('site.sobre-nos');
Route::get('/produto',[\App\Http\Controllers\ProdutoController::class,'index'])->name('site.produto');
Route::get('/revendedores',[\App\Http\Controllers\RevendedoresController::class,'revendedores'])->name('site.revendedores');

Route::get('/noticias_1',[\App\Http\Controllers\Noticias1Controller::class,'index'])->name('site.noticias_1');
Route::get('/noticias_2',[\App\Http\Controllers\Noticias2Controller::class,'index'])->name('site.noticias_2');
Route::get('/noticias_3',[\App\Http\Controllers\Noticias3Controller::class,'index'])->name('site.noticias_3');

//Botijas de gas 
Route::get('/botija5kg_compact',[\App\Http\Controllers\Botija5KgCompactController::class,'index'])->name('site.botija_5kg_compact');
Route::get('/botija5kg_camping',[\App\Http\Controllers\Botija5KgCampingController::class,'index'])->name('site.botija_5kg_camping');
Route::get('/botija_45kg',[\App\Http\Controllers\Botija45KgController::class,'index'])->name('site.botija_45kg');
Route::get('/botija_11kgplastica',[\App\Http\Controllers\Botija11KgPlasticaController::class,'index'])->name('site.botija_11kg_plastica');
Route::get('/botija_11kgpol',[\App\Http\Controllers\Botija11KgPolController::class,'index'])->name('site.botija_11kg_pol');

Route::fallback(function() {
    echo 'A rota acessada não existe. <a href="'.route('site.index').'">clique aqui</a> para ir para página inicial';
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('lang/change', [\App\Http\Controllers\LangController::class, 'change'])->name('changeLang');

Route::middleware('auth')->group(function() {
    Route::get('/crudd', [\App\Http\Controllers\ProductController::class,'index'])->name('crudd');
    Route::get('/create', [\App\Http\Controllers\ProductController::class,'create'])->name('create');
    Route::post('/store', [\App\Http\Controllers\ProductController::class,'store'])->name('store');
    Route::get('show/{product}', [\App\Http\Controllers\ProductController::class,'show'])->name('show');
    Route::get('edit/{product}', [\App\Http\Controllers\ProductController::class,'edit'])->name('edit');
    Route::put('edit/{product}', [\App\Http\Controllers\ProductController::class,'update'])->name('update');
    Route::delete('/{product}', [\App\Http\Controllers\ProductController::class,'destroy'])->name('destroy');

    Route::get('/crudd2', [\App\Http\Controllers\Product2Controller::class,'index'])->name('crudd2');
    Route::get('/create2', [\App\Http\Controllers\Product2Controller::class,'create'])->name('create2');
    Route::post('/store2', [\App\Http\Controllers\Product2Controller::class,'store'])->name('store2');
    Route::get('show2/{product2}', [\App\Http\Controllers\Product2Controller::class,'show'])->name('show2');
    Route::get('edit2/{product2}', [\App\Http\Controllers\Product2Controller::class,'edit'])->name('edit2');
    Route::put('edit2/{product2}', [\App\Http\Controllers\Product2Controller::class,'update'])->name('update2');
    Route::delete('/{product2}', [\App\Http\Controllers\Product2Controller::class,'destroy'])->name('destroy2');


    Route::get('/crudd3', [\App\Http\Controllers\Product3Controller::class,'index'])->name('crudd3');
    Route::get('/create3', [\App\Http\Controllers\Product3Controller::class,'create'])->name('create3');
    Route::post('/store3', [\App\Http\Controllers\Product3Controller::class,'store'])->name('store3');
    Route::get('show3/{product3}', [\App\Http\Controllers\Product3Controller::class,'show'])->name('show3');
    Route::get('edit3/{product3}', [\App\Http\Controllers\Product3Controller::class,'edit'])->name('edit3');
    Route::put('edit3/{product3}', [\App\Http\Controllers\Product3Controller::class,'update'])->name('update3');
    Route::delete('/{product3}', [\App\Http\Controllers\Product3Controller::class,'destroy'])->name('destroy3');
    
});