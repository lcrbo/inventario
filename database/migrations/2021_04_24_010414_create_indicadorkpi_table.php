<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndicadorkpiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indicadorkpis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('indicador');
            $table->string('imagen');
            $table->string('nombre', 40);
            $table->text('descripcion');
            $table->string('formato', 10);
            $table->unsignedInteger('umbral1');
            $table->unsignedInteger('umbral2');
            $table->unsignedInteger('umbral3');
            $table->unsignedInteger('umbral4');
            $table->unsignedInteger('activo');
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
        Schema::dropIfExists('indicadorkpi');
    }
}
