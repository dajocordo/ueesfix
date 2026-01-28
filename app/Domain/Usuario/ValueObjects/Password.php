<?php

namespace App\Domain\Usuario\ValueObjects;

class Password
{
    private string $value;

    public function __construct(string $password)
    {
        if (strlen($password) < 8) {
            throw new \InvalidArgumentException("La contraseña debe tener al menos 8 caracteres");
        }
        
        $this->value = $password;
    }

    public function value(): string
    {
        return $this->value;
    }
}
