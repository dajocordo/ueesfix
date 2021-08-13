<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarreraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carrera', function (Blueprint $table) {
            $table->id('carreraid');
            $table->string('carrera_name', 85);
            $table->unsignedBigInteger('ffacultadid');
            $table->foreign('ffacultadid')->references('facultadid')->on('facultad')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('carrera');
    }
}
