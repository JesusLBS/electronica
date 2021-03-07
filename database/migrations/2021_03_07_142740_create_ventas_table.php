<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id('id_venta');
            $table->string('nombre_razonsocial',40);
            $table->string('tipocomprobante',40);
            $table->integer('seriecomprobante');
            $table->datetime('fecha_hora');
            $table->integer('iva');
            $table->decimal('total_venta');


            $table->unsignedBigInteger('pcliente_id');
            $table->foreign('pcliente_id')->references('id_pcliente')->on('pagoclientes');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');


            $table->rememberToken();
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
        Schema::dropIfExists('ventas');
    }
}