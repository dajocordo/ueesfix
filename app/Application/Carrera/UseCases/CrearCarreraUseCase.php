<?php

namespace App\Application\Carrera\UseCases;

use App\Domain\Carrera\Models\Carrera;
use App\Domain\Carrera\Repositories\CarreraRepository;

/**
 * Caso de uso: Crear una nueva carrera
 */
class CrearCarreraUseCase
{
    public function __construct(
        private CarreraRepository $carreraRepository
    ) {}

    public function ejecutar(string $nombre, int $facultadId): int
    {
        // Crear la entidad de dominio (aquí se validan las reglas de negocio)
        $carrera = Carrera::crear($nombre, $facultadId);

        // Persistir usando el repositorio
        return $this->carreraRepository->guardar($carrera);
    }
}
