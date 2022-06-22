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
        'ci',
        'telefono',
        'categoria_lic',
        'foto',
        'users_id'
    ];

    public function user() {
        return $this->belongsTo(User::class, 'users_id');
    }
}
