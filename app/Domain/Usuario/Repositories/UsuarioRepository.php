<?php

namespace App\Domain\Usuario\Repositories;

use App\Domain\Usuario\Models\Usuario;
use App\Domain\Usuario\ValueObjects\Email;

interface UsuarioRepository
{
    /**
     * Obtener usuario por ID
     */
    public function obtenerPorId(int $id): ?Usuario;

    /**
     * Obtener usuario por email
     */
    public function obtenerPorEmail(Email $email): ?Usuario;

    /**
     * Guardar un nuevo usuario
     */
    public function guardar(Usuario $usuario): int;
}