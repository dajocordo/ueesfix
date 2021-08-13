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
            $table->string('ticket_titulo', 50)->unique;
            $table->string('ticket_detalles', 240);
            $table->unsignedBigInteger('fsoporteid');
            $table->unsignedBigInteger('fusuarioid');
            $table->unsignedBigInteger('fgestionid');
            $table->unsignedBigInteger('fgestiontipoid');
            $table->unsignedBigInteger('festadoid');
            $table->unsignedBigInteger('fprioridadid');
            $table->foreign('fsoporteid')->references('soportecif')->on('soporte')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('fusuarioid')->references('usuariocif')->on('usuario')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('fgestionid')->references('gestionid')->on('gestion')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('fgestiontipoid')->references('gestiontipoid')->on('gestiontipo')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('festadoid')->references('estadoid')->on('estado')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('fprioridadid')->references('prioridadid')->on('prioridad')->onUpdate('cascade')->onDelete('cascade');
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