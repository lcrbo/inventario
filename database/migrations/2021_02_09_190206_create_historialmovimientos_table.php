<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistorialmovimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historialmovimientos', function (Blueprint $table) {
            $table->id();
            
            /* Activo */
            $table->unsignedBigInteger('activo_id');
            $table->foreign('activo_id')->references('id')->on('activos');
            /* tipo movimiento  */
            $table->unsignedBigInteger('tipomovimiento');
            /* ubicacion origen */
            $table->unsignedBigInteger('ubicacion_origen_id');
            $table->foreign('ubicacion_origen_id')->references('id')->on('ubicacions');
            /* ubicacion destino */
            $table->unsignedBigInteger('ubicacion_destino_id');
            $table->foreign('ubicacion_destino_id')->references('id')->on('ubicacions');
            /* stock */
            $table->integer('stock');
            /* estado stock */
            $table->unsignedBigInteger('estado_stock_id');
            $table->foreign('estado_stock_id')->references('id')->on('estadostocks');
            /* Observacion */
            $table->string('observacion');

            $table->unsignedBigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

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
        Schema::dropIfExists('historialmovimientos');
    }
}
