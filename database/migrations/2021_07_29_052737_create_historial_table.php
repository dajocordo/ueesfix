<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistorialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historial', function (Blueprint $table) {
            $table->id('historialid');
            $table->string('historial_titulo', 60);
            $table->string('historial_detalles',200);
            $table->unsignedBigInteger('fticketid');
            $table->unsignedBigInteger('fsoporteid');
            $table->foreign('fticketid')->references('ticketid')->on('ticket')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('fsoporteid')->references('soportecif')->on('soporte')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('historial');
    }
}
