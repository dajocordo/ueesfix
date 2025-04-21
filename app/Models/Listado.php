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
        'id_origin',
    ];

    protected static function booted()
    {
        static::creating(function ($table) {
            $table->created_at = date("Y-m-d H:i:s");
        });

        static::updating(function ($table) {
            $table->updated_at = date("Y-m-d H:i:s");
        });
    }

}
