<?php


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
                $lt->fecha = formatDate($listado->created_at);
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
