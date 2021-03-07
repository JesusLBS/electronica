<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipoempleados extends Model
{
    use HasFactory;

    protected $table="tipoempleados";
	protected $primaryKey = 'id_tipo_empleado';                 
    protected $fillable=["id_tipo_empleado", "nombre_tipoempleado"];
}


