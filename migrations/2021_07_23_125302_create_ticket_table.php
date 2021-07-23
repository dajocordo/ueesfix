<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket', function (Blueprint $table) {
            $table->id('ticketid');
            $table->string('ticket_titulo', 30)->unique;
            $table->string('ticket_detalles', 240);
            $table->unsignedBigInteger('soportelid');
            $table->unsignedBigInteger('usuariolid');
            $table->unsignedBigInteger('gestionlid');
            $table->unsignedBigInteger('gestiontilid');
            $table->unsignedBigInteger('estadolid');
            $table->unsignedBigInteger('prioridadlid');
            $table->foreign('soportelid')->references('soportecif')->on('soporte')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('usuariolid')->references('usuariocif')->on('usuario')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('gestionlid')->references('gestionid')->on('gestion')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('gestiontilid')->references('gestiontipoid')->on('gestiontipo')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('estadolid')->references('estadoid')->on('estado')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('prioridadlid')->references('prioridadid')->on('prioridad')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('ticket');
    }
}