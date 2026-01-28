<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;
use App\Domain\Usuario\Repositories\UsuarioRepository;
use App\Infrastructure\Repositories\EloquentUsuarioRepository;
use App\Application\Usuario\UseCases\LoginUseCase;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Registrar el Repository
        $this->app->bind(
            UsuarioRepository::class,
            EloquentUsuarioRepository::class
        );

        // Registrar el UseCase de Login
        $this->app->singleton(LoginUseCase::class, function ($app) {
            return new LoginUseCase(
                $app->make(UsuarioRepository::class)
            );
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Carbon::setLocale('es');
        //
    }
}
