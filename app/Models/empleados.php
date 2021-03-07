<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class empleados extends Model
{
    use HasFactory;
    protected $table="empleados";
	protected $primaryKey = 'id_empleado';                 
    protected $fillable=["id_empleado", "nombre_empleado", "apellido_pempleado","apellido_mempleado","telefono_empleado","email_empleado"
                          ,"calle_empleado","codigo_postalempleado","genero_empleado","tipo_empleado_id","municipio_id"
                          ,"estado_id"];
}