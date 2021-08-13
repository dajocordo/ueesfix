<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->id('usuariocif');
            $table->string('usuario_name', 45);
            $table->string('usuario_apellido', 65);
            $table->string('usuario_correo', 65)->unique;
            $table->string('usuario_pass', 45);
            $table->string('usuario_tel', 8);
            $table->unsignedBigInteger('fusuariotipoid');
            $table->unsignedBigInteger('ffacultadid');
            $table->unsignedBigInteger('fcarreraid');
            $table->foreign('fusuariotipoid')->references('usuariotipoid')->on('usuariotipo')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('ffacultadid')->references('facultadid')->on('facultad')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('fcarreraid')->references('carreraid')->on('carrera')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
}
