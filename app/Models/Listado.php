<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listado extends Model
{
    use HasFactory;

    protected $connection = 'mysql';
    protected $table = 'listados';
    protected $primaryKey = 'id';

    protected $fillable = [
        'valor',
        'grupo',
    ];

}
