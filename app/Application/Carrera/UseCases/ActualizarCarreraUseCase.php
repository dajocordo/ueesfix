<?php

namespace App\Application\Carrera\UseCases;

use App\Domain\Carrera\Repositories\CarreraRepository;

/**
 * Caso de uso: Actualizar una carrera existente
 */
class ActualizarCarreraUseCase
{
    public function __construct(
        private CarreraRepository $carreraRepository
    ) {}

    public function ejecutar(int $id, string $nombre, int $facultadId): bool
    {
        $carrera = $this->carreraRepository->obtenerPorId($id);

        if (!$carrera) {
            throw new \Exception("Carrera con ID {$id} no encontrada");
        }

        // Actualizar la entidad de dominio (aquí se validan las reglas de negocio)
        $carrera->actualizar($nombre, $facultadId);

        // Persistir cambios
        return $this->carreraRepository->actualizar($carrera);
    }
}
