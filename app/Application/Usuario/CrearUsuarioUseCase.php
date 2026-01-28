<?php

namespace App\Application\Usuario\UseCases;

use App\Domain\Usuario\Models\Usuario;
use App\Domain\Usuario\Repositories\UsuarioRepository;
use App\Domain\Usuario\ValueObjects\Email;
use App\Domain\Usuario\ValueObjects\Password;

/**
 * Caso de uso: Crear un nuevo usuario
 */
class CrearUsuarioUseCase
{
    public function __construct(
        private UsuarioRepository $usuarioRepository
    ) {}

    public function ejecutar(string $nombres, string $apellidos, string $email, string $password): int
    {
        // Crear la entidad de dominio (aquí se validan las reglas de negocio)
        $usuario = Usuario::crear($nombres, $apellidos, new Email($email), new Password($password));

        // Persistir usando el repositorio
        return $this->usuarioRepository->guardar($usuario);
    }
}
