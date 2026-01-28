<?php

namespace App\Domain\Carrera\Repositories;

use App\Domain\Carrera\Models\Carrera;

/**
 * Contrato (interfaz) para el repositorio de Carrera
 * Define las operaciones que pueden realizarse con carreras
 */
interface CarreraRepository
{
    /**
     * Obtener todas las carreras
     * @return Carrera[]
     */
    public function obtenerTodas(): array;

    /**
     * Obtener una carrera por ID
     */
    public function obtenerPorId(int $id): ?Carrera;

    /**
     * Obtener carreras por facultad
     * @return Carrera[]
     */
    public function obtenerPorFacultad(int $facultadId): array;

    /**
     * Guardar una nueva carrera
     */
    public function guardar(Carrera $carrera): int;

    /**
     * Actualizar una carrera existente
     */
    public function actualizar(Carrera $carrera): bool;

    /**
     * Eliminar una carrera
     */
    public function eliminar(int $id): bool;

    /**
     * Verificar si una carrera existe
     */
    public function existe(int $id): bool;
}
