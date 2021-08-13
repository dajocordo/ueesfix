<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoporteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soporte', function (Blueprint $table) {
            $table->id('soportecif');
            $table->string('soporte_name', 45);
            $table->string('soporte_apellido', 65);
            $table->string('soporte_mail', 65)->unique;
            $table->string('soporte_pass', 45);
            $table->string('soporte_tel', 8);
            $table->unsignedBigInteger('fsoportetipoid');
            $table->unsignedBigInteger('frolesid');
            $table->foreign('frolesid')->references('roles_id')->on('roles')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('fsoportetipoid')->references('soportetipoid')->on('soportetipo')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('soporte');
    }
}
