<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activos', function (Blueprint $table) {
            $table->id();
            $table->string('serie');
            $table->string('codigoactivo');
            $table->string('obsevacion');
            $table->integer('stock');

            $table->unsignedBigInteger('estado_id');

            $table->unsignedBigInteger('producto_id');
            $table->unsignedBigInteger('ubicacion_id');
            $table->foreign('estado_id')->references('id')->on('estadostocks')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('producto_id')->references('id')->on('productos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('ubicacion_id')->references('id')->on('ubicacions')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('activos');
    }
}
