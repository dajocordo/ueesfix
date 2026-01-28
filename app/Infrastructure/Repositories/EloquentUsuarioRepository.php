<?php

namespace App\Infrastructure\Repositories;

use App\Domain\Usuario\Models\Usuario;
use App\Domain\Usuario\Repositories\UsuarioRepository;
use App\Domain\Usuario\ValueObjects\Email;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class EloquentUsuarioRepository implements UsuarioRepository
{
    /**
     * Obtener usuario por ID
     */
    public function obtenerPorId(int $id): ?Usuario
    {
        $user = User::find($id);
        
        if (!$user) {
            return null;
        }

        return $this->mapearAlDominio($user);
    }

    /**
     * Obtener usuario por email
     */
    public function obtenerPorEmail(Email $email): ?Usuario
    {
        $user = User::where('email', $email->value())->first();
        
        if (!$user) {
            return null;
        }

        return $this->mapearAlDominio($user);
    }

    /**
     * Guardar un nuevo usuario
     */
    public function guardar(Usuario $usuario): int
    {
        $user = new User();
        //$user->cif = $usuario->getCIF();
        $user->nombres = $usuario->getNombres();
        $user->apellidos = $usuario->getApellidos();
        $user->email = $usuario->getEmail()->value();
        $user->password = $usuario->getPassword();
        $user->save();

        $usuario->setId($user->id);
        return $user->id;
    }

    /**
     * Mapear modelo Eloquent a entidad de dominio
     */
    private function mapearAlDominio(User $user): Usuario
    {
        return new Usuario(
            id: $user->id,
            nombres: $user->nombres,
            apellidos: $user->apellidos,
            email: new Email($user->email),
            password: $user->password,
            fechaCreacion: new \DateTime($user->created_at),
            fechaActualizacion: $user->updated_at ? new \DateTime($user->updated_at) : null
        );
    }
}