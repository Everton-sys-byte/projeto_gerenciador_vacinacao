<?php

use App\Http\Controllers\address\EnderecoController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\auth\CadastrarController;
use App\Http\Controllers\auth\AutenticarController;
use App\Http\Controllers\auth\RecuperarSenhaController;
use App\Http\Controllers\batchs\LoteController;
use App\Http\Controllers\profissional\RegistroController;
use App\Http\Controllers\user\UserController;
use App\Http\Controllers\views\LoginController;
use App\Http\Controllers\vaccines\VacinaController;
use App\Http\Controllers\views\AplicarVacinacaoController;
use App\Http\Controllers\views\GerenciarUsuariosController;
use App\Http\Controllers\views\LotesController;
use App\Http\Controllers\views\VisualizarHistoricoController;
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

//--------------------- FORMS AUTHENTICATE --------------------//
Route::post('/user/cadastrar', [CadastrarController::class, 'store'])->name('user.cadastrar');
Route::post('/user/logar', [AutenticarController::class, 'autenticar'])->name('user.autenticar');

/* -------------------- RECUPERAR SENHA -----------------*/
Route::view('recuperar-senha','authentication/senha/recuperar_senha')->name('password.recovery');
/* rota para o usuário informar o email da conta */
Route::post('recuperar-senha',[RecuperarSenhaController::class, 'sendEmail'])->name('send.password.recovery.email');
/* rota que pega o token que vem via URL e renderiza o formulário com este token em um input hidden */
Route::get('resetar-senha/{token}/{email}', [RecuperarSenhaController::class, 'renderFormPasswordReset'])->name('password.reset');
/* resetar a senha */
Route::post('resetar-senha', [RecuperarSenhaController::class, 'resetPassword'])->name('recover.account');

//--------------------- USER (COMUM) -------------//
Route::middleware(['auth'])->prefix('usuario')->name('user.')->group(function () {
    /* PÁGINA HOME */
    Route::view('/home', 'usuario.home')->name('home');
    
    /* CARTEIRINHA E REGISTRO */
    Route::get('/carteirinha',[RegistroController::class, 'view'])->name('register');
    Route::get('/carteirinha/registro/{registro}',[RegistroController::class, 'moreInformation'])->name('register.more.information');
    Route::get('/carteirinha/registro/{registro}/imprimir', [RegistroController::class,'generatePDF'])->name('register.generate.pdf');

    /* PERFIL */
    /* VER INFORMAÇÕES */
    Route::view('/perfil', 'usuario.perfil')->name('profile');
    Route::view('/configurar/perfil', 'usuario.configurarPerfil')->name('configuration.profile');
    Route::view('/configurar/endereco', 'usuario.configurarEndereco')->name('configuration.address');
    Route::view('/configurar/senha', 'usuario.configurarSenha')->name('configuration.password');

    /* EDITAR INFORMAÇÕES */
    Route::put('/editar/perfil', [UserController::class, 'update'])->name('update.profile');
    Route::put('/editar/endereco', [EnderecoController::class, 'store'])->name('update.address');
    Route::put('/editar/senha', [UserController::class, 'updatePassword'])->name('update.password');
    /* --------------------------------------------------------------------------------------------- */

    /* SAIR */
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
});

//--------------------- USER (PROFISSIONAL) -------------//
Route::middleware(['check.is.profissional'])->prefix('profissional')->name('professional.')->group(function () {
    Route::post('/criar/vacina', [VacinaController::class, 'create'])->name('create.vaccine');
    Route::put('/editar/vacina', [VacinaController::class, 'update'])->name('update.vaccine');

    //ROTA PARA O PROFISSIONAL APLICAR A VACINA
    Route::get('/aplicar/vacinacao', [AplicarVacinacaoController::class, 'view'])->name('apply.vacination');
    Route::post('/efetuar/registro', [RegistroController::class,'store'])->name('perform.register');
    Route::get('/visualizar/historico',[VisualizarHistoricoController::class , 'view'])->name('view.historic');
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
