<?php

use App\Http\Controllers\auth\CadastrarController;
use App\Http\Controllers\auth\AutenticarController;
use App\Http\Controllers\views\LoginController;
use App\Http\Controllers\views\LogoutController;
use App\Http\Controllers\views\PerfilController;
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

//--------------------- USER (COMUM) -------------//
Route::middleware(['auth'])->prefix('usuario')->name('user.')->group(function(){
    Route::view('/home','usuario.home')->name('home');
    Route::get('/perfil',[PerfilController::class, 'view'])->name('profile');
    Route::get('/logout',[LogoutController::class, 'logout'])->name('logout');
});
