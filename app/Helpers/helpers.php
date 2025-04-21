<?php

if (!function_exists('formatUsers')) {
    function formatUsers($usuarios): array
    {
        $usuario = [];
        $num = 1;
        if ($usuarios) {
            foreach ($usuarios as $user) {
                $usr = new \stdClass();
                $usr->id = $user->id;
                $usr->name = $user->name;
                $usr->correo = $user->email;
                $usr->fecha = formatDate($user->created_at);
                $usuario[] = $usr;
            }
        }
        return $usuario;
    }
}

if (!function_exists('formatLists')) {
    function formatLists($listados): array
    {
        $list = [];
        $num = 1;
        if ($listados) {
            foreach ($listados as $listado) {
                $lt = new \stdClass();
                $lt->num = $num++;
                $lt->id = $listado->id;
                $lt->name = $listado->valor;
                $lt->origen = '';
                if ($listado->id_origin) {
                    $lt->origen = $listado->origen->valor ?? '';
                }
                $lt->fecha = formatDate($listado->created_at);
                $lt->actualizado = formatDate($listado->updated_at);
                $list[] = $lt;
            }
        }
        return $list;
    }
}

if (!function_exists('formatDate')) {
    function formatDate($date): string
    {
        $fecha = '';
        if ($date) {
            $fecha = $date->diffForHumans();

        }
        return $fecha;
    }
}
