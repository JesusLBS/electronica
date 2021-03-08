<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Softdeletes;

class pagoclientes extends Model
{
    use HasFactory;
    use Softdeletes;

    protected $table="pagoclientes";
	protected $primaryKey = 'id_pcliente';                 
    protected $fillable=["id_pcliente", "nombre_cliente", "apellido_pcliente","apellido_mcliente","direccion_cliente"
                        ,"departamento_cliente","colonia_cliente","ciudad_cliente","estado_id","codigo_postalcliente"
                        ,"email_cliente","celular_cliente","deleted_at"];
}












