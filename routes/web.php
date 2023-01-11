<?php

use App\Http\Controllers\auth\CadastrarController;
use App\Http\Controllers\auth\AutenticarController;
use App\Http\Controllers\package\LoteController;
use App\Http\Controllers\user\UserController;
use App\Http\Controllers\views\LoginController;
use App\Http\Controllers\vaccines\VacinaController;
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
Route::get('/', [LoginController::class, 'view'])->name('logar');
Route::view('/cadastrar', 'authentication/cadastrar')->name('cadastrar');

//--------------------- FORMS SUBMIT --------------------//
Route::post('/user/cadastrar', [CadastrarController::class, 'store'])->name('user.cadastrar');
Route::post('/user/logar', [AutenticarController::class, 'autenticar'])->name('user.autenticar');

//--------------------- USER (COMUM) -------------//
Route::middleware(['auth'])->prefix('usuario')->name('user.')->group(function () {
    Route::view('/home', 'usuario.home')->name('home');
    Route::view('/perfil', 'usuario.perfil')->name('profile');
    Route::view('/configurar/perfil','usuario.configurar')->name('configuration.profile');
    Route::post('/editar/perfil', [UserController::class, 'update'])->name('update.profile');
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
});


//--------------------- USER (PROFISSIONAL) -------------//

Route::middleware(['check.is.profissional'])->prefix('profissional')->name('professional.')->group(function () {
});

//-------------------- ROTA PARA AS VACINAS --------------- //
Route::middleware(['auth'])->prefix('vacinas')->name('vaccines.')->controller(VacinaController::class)->group(function () {
    Route::get('/disponiveis', 'view')->name('available');
});

//-------------------- ROTA PARA OS LOTES --------------- //
Route::middleware(['check.is.profissional'])->prefix('vacinas')->name('package.')->controller(LoteController::class)
    ->group(function () {
        Route::get('/{vacina}/lotes','view')->name('available');
    });
