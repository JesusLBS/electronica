<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipofacturas extends Model
{
    use HasFactory;

    protected $table="tipofacturas";
	protected $primaryKey = 'id_tipofactura';                 
    protected $fillable=["id_tipofactura", "nombre_tipofactura"];
}


