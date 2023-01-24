<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

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

        // GATES DO PROFISSIONAL //

        //VACINAS
        Gate::define('adicionar-vacina', function(User $user) {
            return $user->hasRole('profissional');
        });

        Gate::define('editar-vacina', function(User $user) {
            return $user->hasRole('profissional');
        });

        //LOTES
        Gate::define('adicionar-lote', function(User $user) {
            return $user->hasRole('profissional');
        });

        Gate::define('editar-lote', function(User $user) {
            return $user->hasRole('profissional');
        });

        // GATES DO ADMINISTRADOR //
        //USUÁRIOS
        Gate::define('criar-usuario', function(User $user) {
            return $user->hasRole('admin');
        });

        Gate::define('editar-usuario', function(User $user){
            return $user->hasRole('admin');
        });

        //VACINAS
        Gate::define('excluir-vacina', function(User $user) {
            return $user->hasRole('admin');
        });

        //LOTES
        Gate::define('excluir-lote', function(User $user) {
            return $user->hasRole('admin');
        });
    }
}
