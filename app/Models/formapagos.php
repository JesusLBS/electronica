<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Softdeletes;

class formapagos extends Model
{
    use HasFactory;
    use Softdeletes;
    
    protected $table="formapagos";
	protected $primaryKey = 'id_forma_pago';                 
    protected $fillable=["id_forma_pago", "forma_pago","deleted_at"];
}


