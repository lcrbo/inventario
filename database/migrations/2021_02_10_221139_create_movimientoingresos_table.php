<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovimientoingresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimientoingresos', function (Blueprint $table) {
            $table->id();

            /* producto */
            $table->unsignedBigInteger('producto_id');
            $table->foreign('producto_id')->references('id')->on('productos');
            /* tipo de documento  */
            $table->unsignedBigInteger('tipodocumento_id');
            $table->foreign('tipodocumento_id')->references('id')->on('tipodocumentos');
            /* nro de factura, GD, etc  */
            $table->string('numerodocumento');
            /* orden de compra */
            $table->string('ordencompra');
            /*  1.Nuevo 2.usado */
            $table->integer('nuevo');
            /* serie */
            $table->string('serie');
            /* codigo de activo */
            $table->string('codigoactivo');
            /* stock */
            $table->integer('stock');
            /* ubicacion  */
            $table->unsignedBigInteger('ubicacion_id');
            $table->foreign('ubicacion_id')->references('id')->on('ubicacions');
            
            /* estado stock */
            $table->unsignedBigInteger('estado_stock_id');
            $table->foreign('estado_stock_id')->references('id')->on('estadostocks');
            /* Observacion */
            $table->string('observacion');
            /* usuario */
            $table->unsignedBigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

            $table->unsignedBigInteger('activo_id');
            $table->foreign('activo_id')->references('id')->on('activos');
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
        Schema::dropIfExists('movimientoingresos');
    }
}
