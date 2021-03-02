<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_usuario extends Model
{
    use HasFactory;

    protected $table = 'tipo_usuario';

    public $timestamps = false;

    protected $fillable = [
        'nombre_tipo'
    ];

    // * Relacion uno a muchos
    public function colaboradores()
    {
        return $this->hasMany('App\Models\Colaborador');
    }
}
