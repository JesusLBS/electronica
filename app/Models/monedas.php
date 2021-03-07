<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class monedas extends Model
{
    use HasFactory;
    protected $table="monedas";
	protected $primaryKey = 'id_moneda';                 
    protected $fillable=["id_moneda", "tipo_moneda"];
}


