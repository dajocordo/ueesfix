<?php

namespace App\Models;

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
        'detalles',
        'password',
    ];

}
