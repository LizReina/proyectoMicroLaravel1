<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conductor extends Model
{ use HasFactory;

    protected $table = 'conductor';
    protected $fillable = [
        'nombre',
        'fecha_nacimiento',
        'sexo',
        'telefono',
        'email',
        'categoria_lic',
        'foto'
    ];

    public function microbus() {
        return $this->belongsTo(microbus::class, 'microbus_id');
    }
}
