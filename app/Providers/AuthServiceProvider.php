<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

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
     */
    public function boot(): void
    {

        Gate::define('articulos', function ($user){
            return comprobarPermisos('articulos.index');
        });

        Gate::define('stock', function ($user){
            return comprobarPermisos('stock.index');
        });

        Gate::define('ofertas', function ($user){
           return comprobarPermisos('ofertas.index');
        });

        Gate::define('empresas', function ($user){
            return $user->role == 100;
        });

        Gate::define('usuarios', function ($user){
            return comprobarPermisos('usuarios.index');
        });

        Gate::define('parametros', function ($user){
            return $user->role == 100;
        });
    }
}
