<?php

namespace App\Application\Usuario\UseCases;

use App\Domain\Usuario\Repositories\UsuarioRepository;
use App\Domain\Usuario\ValueObjects\Email;
use App\Domain\Usuario\ValueObjects\Password;
use Illuminate\Support\Facades\Hash;

class LoginUseCase
{
    public function __construct(
        private UsuarioRepository $usuarioRepository
    ) {
    }

    /**
     * Ejecutar el login
     * @throws \Exception
     */
    public function ejecutar(string $email, string $passwordPlain): array
    {
        // Crear los Value Objects (valida automáticamente)
        $email = new Email($email);
        
        // Obtener usuario por email
        $usuario = $this->usuarioRepository->obtenerPorEmail($email);
        
        if (!$usuario) {
            throw new \Exception("Las credenciales no coinciden.");
        }

        // Verificar la contraseña (está hasheada en BD)
        if (!Hash::check($passwordPlain, $usuario->getPassword())) {
            throw new \Exception("Las credenciales no coinciden.");
        }

        // Login exitoso, retorna datos del usuario
        return [
            'id' => $usuario->getId(),
            'nombres' => $usuario->getNombres(),
            'apellidos' => $usuario->getApellidos(),
            'email' => $usuario->getEmail()->value(),
        ];
    }
}
