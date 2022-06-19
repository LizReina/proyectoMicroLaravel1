<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Microbus extends Model
{
    use HasFactory;

    protected $table = 'microbus';
    protected $fillable = [
        'foto',
        'placa',
        'modelo',
        'nro_asientos',
        'nro_linea',
        'nroInterno',
        'fecha_asignacion',
        'fecha_baja',
        'conductor_id'
    ];

    public function conductor() {
        return $this->belongsTo(conductor::class, 'conductor_id');
    }
}
