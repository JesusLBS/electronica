<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class metodopagos extends Model
{
    use HasFactory;
    protected $table="metodopagos";
	protected $primaryKey = 'id_metodo_pago';                 
    protected $fillable=["id_metodo_pago", "metodo_pago"];
}


