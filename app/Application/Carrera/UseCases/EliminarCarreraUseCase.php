<?php

namespace App\Application\Carrera\UseCases;

use App\Domain\Carrera\Repositories\CarreraRepository;

/**
 * Caso de uso: Eliminar una carrera
 */
class EliminarCarreraUseCase
{
    public function __construct(
        private CarreraRepository $carreraRepository
    ) {}

    public function ejecutar(int $id): bool
    {
        if (!$this->carreraRepository->existe($id)) {
            throw new \Exception("Carrera con ID {$id} no encontrada");
        }

        return $this->carreraRepository->eliminar($id);
    }
}
