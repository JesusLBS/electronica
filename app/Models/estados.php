<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class estados extends Model
{

    use HasFactory;
    protected $table="estados";
	protected $primaryKey = 'id_estado';                 
    protected $fillable=["id_estado", "nombre_estado"];
}

