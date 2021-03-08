<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagoclientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('pagoclientes', function (Blueprint $table) {
            $table->id('id_pcliente');
            $table->string('nombre_cliente',40);
            $table->string('apellido_pcliente',40);
            $table->string('apellido_mcliente',40);
            $table->string('direccion_cliente',40);
            $table->string('departamento_cliente',40)->nullable();
            $table->string('colonia_cliente',40);
            $table->string('ciudad_cliente');

            
            $table->unsignedBigInteger('id_estado');
            $table->foreign('id_estado')->references('id_estado')->on('estados');




            $table->integer('codigo_postalcliente');
            $table->string('email_cliente',40);
            $table->string('celular_cliente',10);

            $table->unsignedBigInteger('id_forma_pago');
            $table->foreign('id_forma_pago')->references('id_forma_pago')->on('formapagos');

            
            $table->timestamp('deleted_at')->nullable();       
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
        Schema::dropIfExists('pagoclientes');
    }
}
