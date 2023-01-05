<?php

use App\Http\Controllers\auth\CadastrarController;
use App\Http\Controllers\auth\AutenticarController;
use App\Http\Controllers\views\LoginController;
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


//--------------------- FORMS VIEW ----------------------//
Route::get('/',[LoginController::class,'view'])->name('logar');
Route::view('/cadastrar','authentication/cadastrar')->name('cadastrar');

//--------------------- FORMS SUBMIT --------------------//
Route::post('/user/cadastrar',[CadastrarController::class,'store'])->name('user.cadastrar');
Route::post('/user/logar',[AutenticarController::class,'autenticar'])->name('user.autenticar');

//--------------------- USER (COMUM) ROUTES -------------//

Route::middleware(['auth'])->prefix('usuario')->name('user.')->group(function(){
    Route::view('/home','usuario.home')->name('home');
});
