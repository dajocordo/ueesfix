<?php

namespace App\Domain\Usuario\Models;

use App\Domain\Usuario\ValueObjects\Email;
use App\Domain\Usuario\ValueObjects\Password;

class Usuario
{
    private int $id;
    private string $nombres;
    private string $apellidos;
    private Email $email;
    private string $password; // string simple, no Value Object (cambia)
    private \DateTime $fechaCreacion;
    private ?\DateTime $fechaActualizacion;

    public function __construct(
        int $id,
        string $nombres,
        string $apellidos,
        Email $email,
        string $password,
        \DateTime $fechaCreacion,
        ?\DateTime $fechaActualizacion = null
    ) {
        $this->id = $id;
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
        $this->email = $email;
        $this->password = $password;
        $this->fechaCreacion = $fechaCreacion;
        $this->fechaActualizacion = $fechaActualizacion;
    }

    public static function crear(string $nombres, string $apellidos, Email $email, Password $password): self
    {
        return new self(
            id: 0, // Se asignará en la persistencia
            nombres: $nombres,
            apellidos: $apellidos,
            email: $email,
            password: $password->value(), // Sin hashear aquí, lo hace el Model al guardar
            fechaCreacion: new \DateTime(),
            fechaActualizacion: null
        );
    }

    
    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getNombres(): string
    {
        return $this->nombres;
    }

    public function getApellidos(): string
    {
        return $this->apellidos;
    }

    public function getEmail(): Email
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getFechaCreacion(): \DateTime
    {
        return $this->fechaCreacion;
    }

    public function getFechaActualizacion(): ?\DateTime
    {
        return $this->fechaActualizacion;
    }
    /**
     * Cambiar la contraseña del usuario
     * Valida que cumpla con los requisitos antes de cambiar
     */
    public function cambiarPassword(Password $nuevoPassword): void
    {
        $this->password = $nuevoPassword->value();
        $this->fechaActualizacion = new \DateTime();
    }
    
}