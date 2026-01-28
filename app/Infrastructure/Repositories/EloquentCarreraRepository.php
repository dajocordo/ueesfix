<?php

namespace App\Infrastructure\Repositories;

use App\Domain\Carrera\Models\Carrera;
use App\Domain\Carrera\Repositories\CarreraRepository;
use App\Models\Listado;

/**
 * Implementación del repositorio de Carrera usando Eloquent
 * Esta es la capa de infraestructura que conecta el dominio con la BD
 */
class EloquentCarreraRepository implements CarreraRepository
{
    /**
     * Obtener todas las carreras
     */
    public function obtenerTodas(): array
    {
        return Listado::where('grupo', 'carrera')
            ->get()
            ->map(fn($listado) => $this->mapearAlDominio($listado))
            ->toArray();
    }

    /**
     * Obtener una carrera por ID
     */
    public function obtenerPorId(int $id): ?Carrera
    {
        $listado = Listado::find($id);
        
        if (!$listado || $listado->grupo !== 'carrera') {
            return null;
        }

        return $this->mapearAlDominio($listado);
    }

    /**
     * Obtener carreras por facultad
     */
    public function obtenerPorFacultad(int $facultadId): array
    {
        return Listado::where('grupo', 'carrera')
            ->where('id_origin', $facultadId)
            ->get()
            ->map(fn($listado) => $this->mapearAlDominio($listado))
            ->toArray();
    }

    /**
     * Guardar una nueva carrera
     */
    public function guardar(Carrera $carrera): int
    {
        $listado = new Listado();
        $listado->valor = $carrera->getNombre();
        $listado->id_origin = $carrera->getFacultadId();
        $listado->grupo = 'carrera';
        $listado->save();

        $carrera->setId($listado->id);
        return $listado->id;
    }

    /**
     * Actualizar una carrera existente
     */
    public function actualizar(Carrera $carrera): bool
    {
        $listado = Listado::find($carrera->getId());

        if (!$listado) {
            return false;
        }

        $listado->valor = $carrera->getNombre();
        $listado->id_origin = $carrera->getFacultadId();
        
        return $listado->save();
    }

    /**
     * Eliminar una carrera
     */
    public function eliminar(int $id): bool
    {
        $listado = Listado::find($id);
        
        if (!$listado) {
            return false;
        }

        return (bool) $listado->delete();
    }

    /**
     * Verificar si una carrera existe
     */
    public function existe(int $id): bool
    {
        return Listado::where('id', $id)
            ->where('grupo', 'carrera')
            ->exists();
    }

    /**
     * Mapear modelo Eloquent a entidad de dominio
     */
    private function mapearAlDominio(Listado $listado): Carrera
    {
        return new Carrera(
            id: $listado->id,
            nombre: $listado->valor,
            facultadId: $listado->id_origin ?? 0,
            fechaCreacion: new \DateTime($listado->created_at),
            fechaActualizacion: $listado->updated_at ? new \DateTime($listado->updated_at) : null
        );
    }
}
