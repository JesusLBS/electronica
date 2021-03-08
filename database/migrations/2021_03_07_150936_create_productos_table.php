<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id('id_producto');
            $table->string('nombre_producto',40);
            $table->string('descripcion_producto',40);
            $table->integer('numserie_producto');
            $table->decimal('preciocompra_producto');
            $table->decimal('precioventa_producto');
            $table->string('garantiarienda_producto',40);
            $table->string('garantiaextendida_producto',40);


            $table->unsignedBigInteger('id_pcategoria');
            $table->foreign('id_pcategoria')->references('id_pcategoria')->on('productcategorias');

            $table->unsignedBigInteger('id_marca');
            $table->foreign('id_marca')->references('id_marca')->on('marcas');

            $table->unsignedBigInteger('id_proveedor');
            $table->foreign('id_proveedor')->references('id_proveedor')->on('proveedores');


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
        Schema::dropIfExists('productos');
    }
}







