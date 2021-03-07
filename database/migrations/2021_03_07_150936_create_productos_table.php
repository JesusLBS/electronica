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


            $table->unsignedBigInteger('pcategoria_id');
            $table->foreign('pcategoria_id')->references('id_pcategoria')->on('productcategorias');

            $table->unsignedBigInteger('marca_id');
            $table->foreign('marca_id')->references('id_marca')->on('marcas');

            $table->unsignedBigInteger('proveedor_id');
            $table->foreign('proveedor_id')->references('id_proveedor')->on('proveedores');


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







