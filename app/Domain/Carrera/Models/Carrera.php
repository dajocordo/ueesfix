<?php

namespace App\Domain\Carrera\Models;

/**
 * Entidad de Dominio: Carrera
 * Representa una carrera académica en el sistema
 */
class Carrera
{
    private int $id;
    private string $nombre;
    private string $grupo;
    private int $facultadId;
    private \DateTime $fechaCreacion;
    private ?\DateTime $fechaActualizacion;

    public function __construct(
        int $id,
        string $nombre,
        string $grupo = 'carrera',
        int $facultadId,
        \DateTime $fechaCreacion,
        ?\DateTime $fechaActualizacion = null
    ) {
        $this->validar($nombre);
        
        $this->id = $id;
        $this->nombre = $nombre;
        $this->grupo = $grupo;
        $this->facultadId = $facultadId;
        $this->fechaCreacion = $fechaCreacion;
        $this->fechaActualizacion = $fechaActualizacion;
    }

    /**
     * Factory method para crear una nueva carrera
     */
    public static function crear(string $nombre, int $facultadId): self
    {
        return new self(
            id: 0, // Se asignará en la persistencia
            nombre: $nombre,
            grupo: 'carrera',
            facultadId: $facultadId,
            fechaCreacion: new \DateTime(),
            fechaActualizacion: null
        );
    }

    /**
     * Validar reglas de negocio
     */
    private function validar(string $nombre): void
    {
        if (empty(trim($nombre))) {
            throw new \InvalidArgumentException('El nombre de la carrera no puede estar vacío');
        }

        if (strlen($nombre) > 255) {
            throw new \InvalidArgumentException('El nombre de la carrera no puede exceder 255 caracteres');
        }
    }

    /**
     * Actualizar información de la carrera
     */
    public function actualizar(string $nombre, int $facultadId): void
    {
        $this->validar($nombre);
        
        $this->nombre = $nombre;
        $this->facultadId = $facultadId;
        $this->fechaActualizacion = new \DateTime();
    }

    // Getters
    public function getId(): int
    {
        return $this->id;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getFacultadId(): int
    {
        return $this->facultadId;
    }

    public function getFechaCreacion(): \DateTime
    {
        return $this->fechaCreacion;
    }

    public function getFechaActualizacion(): ?\DateTime
    {
        return $this->fechaActualizacion;
    }

    // Setters para persistencia (solo el ID después de guardar)
    public function setId(int $id): void
    {
        $this->id = $id;
    }
}
