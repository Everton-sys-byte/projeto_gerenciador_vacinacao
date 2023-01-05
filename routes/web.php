<?php

use App\Http\Controllers\auth\CadastrarController;
use App\Http\Controllers\auth\LogarController;
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
Route::view('/','authentication/login')->name('logar');
Route::view('/cadastrar','authentication/cadastrar')->name('cadastrar');

//--------------------- FORMS SUBMIT --------------------//
Route::post('/user/logar',[CadastrarController::class,'store'])->name('user.cadastrar');
Route::post('/user/cadastrar',[LogarController::class,'autenticar'])->name('user.autenticar');
