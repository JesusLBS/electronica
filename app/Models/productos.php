<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    use HasFactory;

    protected $table="productos";
	protected $primaryKey = 'id_producto';                 
    protected $fillable=["id_producto", "nombre_producto", "descripcion_producto","numserie_producto"
                        ,"preciocompra_producto","precioventa_producto","garantiarienda_producto"
                        ,"garantiaextendida_producto","pcategoria_id","marca_id","proveedor_id"];
}











