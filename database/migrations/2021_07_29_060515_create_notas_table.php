<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->id();
            $table->string('nota', 200);
            $table->boolean('es_user');
            $table->unsignedBigInteger('fusuarioid');
            $table->unsignedBigInteger('fsoporteid');
            $table->unsignedBigInteger('fticketid');
            $table->foreign('fusuarioid')->references('usuariocif')->on('usuario')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('fsoporteid')->references('soportecif')->on('soporte')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('fticketid')->references('ticketid')->on('ticket')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('notas');
    }
}
