<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Notifications\Messages\MailMessage;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // GATES DAS VACINAS //

        Gate::define('adicionar-vacina', function (User $user) {
            return ($user->hasRole('profissional') || $user->hasRole('admin'));
        });

        Gate::define('editar-vacina', function (User $user) {
            return ($user->hasRole('profissional') || $user->hasRole('admin'));
        }); 

        // GATE DOS LOTES //

        Gate::define('adicionar-lote', function (User $user) {
            return ($user->hasRole('profissional') || $user->hasRole('admin'));
        });

        /* BUTTON EDITAR LOTE DO CARD LOTE */
        Gate::define('editar-lote', function (User $user) {
            return ($user->hasRole('profissional') || $user->hasRole('admin'));
        }); 

        // GATES DO ADMINISTRADOR //
        //USUÁRIOS
        Gate::define('criar-usuario', function (User $user) {
            return $user->hasRole('admin');
        });

        Gate::define('editar-usuario', function (User $user) {
            return $user->hasRole('admin');
        });

        //VACINAS
        Gate::define('excluir-vacina', function (User $user) {
            return $user->hasRole('admin');
        });

        //LOTES
        Gate::define('excluir-lote', function (User $user) {
            return $user->hasRole('admin');
        });

        /* TRADUZINDO O EMAIL DO USUÁRIO RESETAR A SENHA */

        /* ResetPassword::toMailUsing(function ($url) {
            return (new MailMessage)
                ->subject('Notificação para resetar a senha')
                ->line('Você está recebendo este email para resetar sua senha.')
                ->action('Reset Password', $url)
                ->line('This password reset link will expire in :count minutes.', ['count' => config('auth.passwords.' . config('auth.defaults.passwords') . '.expire')]))
                ->line('If you did not request a password reset, no further action is required.');
        }); */
    }
}
