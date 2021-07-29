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
            $table->string('unombre', 35);
            $table->string('uapellido', 50);
            $table->string('umail', 65)->unique;
            $table->string('upassword', 25);
            $table->unsignedBigInteger('usuariotti');
            $table->unsignedBigInteger('facultadtti');
            $table->unsignedBigInteger('carreratti');
            $table->foreign('usuariotti')->references('usuariotipoid')->on('usuariotipo')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('facultadtti')->references('facultadid')->on('facultad')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('carreratti')->references('carreraid')->on('carrera')->onUpdate('cascade')->onDelete('cascade');
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
