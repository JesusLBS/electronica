<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id('id_empleado');
            $table->string('nombre_empleado',40);
            $table->string('apellido_pempleado',40);
            $table->string('apellido_mempleado',40);
            $table->integer('telefono_empleado');       
            $table->string('email_empleado',40);

            $table->string('calle_empleado',40);
            $table->integer('codigo_postalempleado');
            $table->string('genero_empleado',40);
                        

            $table->unsignedBigInteger('tipo_empleado_id');
            $table->foreign('tipo_empleado_id')->references('id_tipo_empleado')->on('tipoempleados');

            $table->unsignedBigInteger('municipio_id');
            $table->foreign('municipio_id')->references('id_municipio')->on('municipios');

            $table->unsignedBigInteger('estado_id');
            $table->foreign('estado_id')->references('id_estado')->on('estados');



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
        Schema::dropIfExists('empleados');
    }
}