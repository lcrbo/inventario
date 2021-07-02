<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatoskpisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datoskpis', function (Blueprint $table) {
            $table->id();
            $table->integer('kpi');
            $table->integer('Alvi');
            $table->integer('Unimarc');
            $table->integer('Mayorista10');
            $table->integer('OKMarket');
            $table->string('fecha');
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
        Schema::dropIfExists('datoskpis');
    }
}
