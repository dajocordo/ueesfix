<?php

namespace App\Providers;

use App\Domain\Carrera\Repositories\CarreraRepository;
use App\Infrastructure\Repositories\EloquentCarreraRepository;
use Illuminate\Support\ServiceProvider;

/**
 * Service Provider para registrar las dependencias del dominio de Carrera
 * Aquí se configura la inyección de dependencias
 */
class CarreraServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        // Binding de la interfaz del repositorio a su implementación
        $this->app->bind(
            CarreraRepository::class,
            EloquentCarreraRepository::class
        );
    }

    public function boot(): void
    {
        //
    }
}
