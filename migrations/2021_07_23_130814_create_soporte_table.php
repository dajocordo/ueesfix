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
            $table->string('snombre', 35);
            $table->string('sapellido', 50);
            $table->string('smail', 65)->unique;
            $table->string('spassword', 25);
            $table->string('stelefono', 8);
            $table->unsignedBigInteger('soportetti');
            $table->unsignedBigInteger('roltti');
            $table->foreign('roltti')->references('rolesid')->on('roles')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('soportetti')->references('soportetipoid')->on('soportetipo')->onUpdate('cascade')->onDelete('cascade');
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
