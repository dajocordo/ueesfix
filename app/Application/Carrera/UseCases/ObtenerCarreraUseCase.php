<?php

namespace App\Application\Carrera\UseCases;

use App\Domain\Carrera\Repositories\CarreraRepository;

/**
 * Caso de uso: Obtener carrera por ID
 */
class ObtenerCarreraUseCase
{
    public function __construct(
        private CarreraRepository $carreraRepository
    ) {}

    public function ejecutar(int $id): ?array
    {
        $carrera = $this->carreraRepository->obtenerPorId($id);

        if (!$carrera) {
            return null;
        }

        return [
            'id' => $carrera->getId(),
            'nombre' => $carrera->getNombre(),
            'facultadId' => $carrera->getFacultadId(),
            'fechaCreacion' => $carrera->getFechaCreacion()->format('Y-m-d H:i:s'),
            'fechaActualizacion' => $carrera->getFechaActualizacion()?->format('Y-m-d H:i:s'),
        ];
    }
}
