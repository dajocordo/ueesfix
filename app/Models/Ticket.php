<?php

namespace App\Models;

use App\Models\Listado;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $connection = 'mysql';
    protected $table = 'ticket';
    protected $primaryKey = 'id';

    protected $fillable = [
        'titulo',
        'detalle',
        'estado_ticket',
    ];

    public function listado()
    {
        return $this->hasOne(Listado::class, 'id', 'estado_ticket');
    }

}