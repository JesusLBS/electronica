<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detalleventas extends Model
{
    use HasFactory;

    protected $table="detalleventas";
	protected $primaryKey = 'id_detalleventa';                 
    protected $fillable=["id_detalleventa", "cantidad", "venta_id","producto_id"];
    
}



