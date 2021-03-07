<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class razonsocial extends Model
{
    use HasFactory;

    protected $table="razonsocials";
	protected $primaryKey = 'id_razonsocial';                 
    protected $fillable=["id_razonsocial", "nombre_razonsocial"];
}


