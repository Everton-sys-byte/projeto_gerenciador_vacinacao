<?php

use App\Http\Controllers\Address\EnderecoController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\auth\CadastrarController;
use App\Http\Controllers\auth\AutenticarController;
use App\Http\Controllers\batchs\LoteController;
use App\Http\Controllers\user\UserController;
use App\Http\Controllers\views\LoginController;
use App\Http\Controllers\vaccines\VacinaController;
use App\Http\Controllers\views\AplicarVacinacaoController;
use App\Http\Controllers\views\GerenciarUsuariosController;
use App\Http\Controllers\views\LotesController;
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
    Route::view('/configurar/perfil', 'usuario.configurarPerfil')->name('configuration.profile');
    Route::view('/configurar/endereco', 'usuario.configurarEndereco')->name('configuration.address');
    Route::put('/editar/perfil', [UserController::class, 'update'])->name('update.profile');
    Route::put('/editar/endereco', [EnderecoController::class, 'store'])->name('update.address');
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
});

//--------------------- USER (PROFISSIONAL) -------------//
Route::middleware(['check.is.profissional'])->prefix('profissional')->name('professional.')->group(function () {
    Route::post('/criar/vacina', [VacinaController::class, 'create'])->name('create.vaccine');
    Route::put('/editar/vacina', [VacinaController::class, 'update'])->name('update.vaccine');

    //ROTA PARA O PROFISSIONAL APLICAR A VACINA
    Route::get('/aplicar/vacinacao', [AplicarVacinacaoController::class, 'view'])->name('apply.vacination');
});

//--------------------- USER (ADMINISTRADOR) -------------//
Route::middleware(['check.is.administrador'])->prefix('administrador')->name('admin.')->group(function () {
    Route::get('/gerenciar/usuarios', [GerenciarUsuariosController::class, 'view'])->name('manage.users');
    Route::post('/criar/usuario', [AdminController::class, 'createUser'])->name('create.user');
    Route::put('/editar/usuario', [AdminController::class, 'editUser'])->name('edit.user');
    Route::delete('/excluir/vacina', [VacinaController::class, 'delete'])->name('delete.vaccine');
    Route::delete('/excluir/lote', [LoteController::class,'delete'])->name('delete.batch');
});

//-------------------- ROTA PARA AS VACINAS --------------- //
Route::middleware(['auth'])->prefix('vacinas')->name('vaccines.')->controller(VacinaController::class)->group(function () {
    Route::get('/disponiveis', 'view')->name('available');
});

//-------------------- ROTA PARA OS LOTES --------------- //
Route::middleware(['check.is.profissional'])->prefix('vacinas')->name('batch.')->controller(LotesController::class)
    ->group(function () {
        Route::get('/{vacina}/lotes', 'view')->name('available');
        Route::post('{vacina}/criar/lote', [LoteController::class, 'store'])->name('create');
        Route::put('/editar/lote', [LoteController::class,'update'])->name('update');
    });
