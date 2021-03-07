<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class formapagos extends Model
{
    use HasFactory;
    protected $table="formapagos";
	protected $primaryKey = 'id_forma_pago';                 
    protected $fillable=["id_forma_pago", "forma_pago"];
}


