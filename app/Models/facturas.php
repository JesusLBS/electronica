<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class facturas extends Model
{
    use HasFactory;

    protected $table="facturas";
	protected $primaryKey = 'id_factura';                 
    protected $fillable=["id_factura", "rfc_cliente", "email_cliente","nombre_cliente","telefono_cliente","calle_cliente"
                          ,"codigo_postalcliente","municipio_id","estado_id","razonsocial_id","tipofactura_id"];

}










