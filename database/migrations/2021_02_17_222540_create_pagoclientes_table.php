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
            $table->id('id_cliente');
            $table->string('nombre_cliente',40);
            $table->string('apellido_pcliente',40);
            $table->string('apellido_mcliente',40);
            $table->string('direccion_cliente',40);
            $table->string('departamento_cliente',40);
            $table->string('colonia_cliente',40);
            $table->string('ciudad_cliente',40);

            

            $table->unsignedBigInteger('estado_id');
            $table->foreign('estado_id')->references('id_estado')->on('estados');



            $table->string('codigo_postalcliente',40);
            $table->string('email_cliente',40);
            $table->string('celular_cliente',40);       
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
