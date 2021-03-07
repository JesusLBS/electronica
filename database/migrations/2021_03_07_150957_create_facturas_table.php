<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->id('id_factura');
            $table->string('rfc_cliente',40);
            $table->string('email_cliente',40);
            $table->string('nombre_cliente',40);
            $table->integer('telefono_cliente');
            $table->string('calle_cliente',40);
            $table->integer('codigo_postalcliente');


            $table->unsignedBigInteger('municipio_id');
            $table->foreign('municipio_id')->references('id_municipio')->on('municipios');

            $table->unsignedBigInteger('estado_id');
            $table->foreign('estado_id')->references('id_estado')->on('estados');

            $table->unsignedBigInteger('razonsocial_id');
            $table->foreign('razonsocial_id')->references('id_razonsocial')->on('razonsocials');

            $table->unsignedBigInteger('tipofactura_id');
            $table->foreign('tipofactura_id')->references('id_tipofactura')->on('tipofacturas');
            


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
        Schema::dropIfExists('facturas');
    }
}
