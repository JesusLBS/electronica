<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proveedores extends Model
{
    use HasFactory;

    protected $table="proveedores";
	protected $primaryKey = 'id_proveedor';                 
    protected $fillable=["id_proveedor", "nombre_proveedor", "rfc_proveedor","telefono_proveedor"
                        ,"email_proveedor","tipopersona_proveedor","razonsocial_id"];
}







