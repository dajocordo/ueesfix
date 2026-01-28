<?php

namespace App\Application\Carrera\UseCases;

use App\Domain\Carrera\Repositories\CarreraRepository;

/**
 * Caso de uso: Listar todas las carreras
 */
class ListarCarrerasUseCase
{
    public function __construct(
        private CarreraRepository $carreraRepository
    ) {}

    public function ejecutar(): array
    {
        $carreras = $this->carreraRepository->obtenerTodas();

        return array_map(function ($carrera) {
            return [
                'id' => $carrera->getId(),
                'nombre' => $carrera->getNombre(),
                'facultadId' => $carrera->getFacultadId(),
                'fechaCreacion' => $carrera->getFechaCreacion()->format('Y-m-d H:i:s'),
                'fechaActualizacion' => $carrera->getFechaActualizacion()?->format('Y-m-d H:i:s'),
            ];
        }, $carreras);
    }
}
