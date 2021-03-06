<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    protected $table = 'area';

    public $timestamps = false;

    protected $fillable = [
        'nombre_area'
    ];

    // * Relacion uno a muchos
    public function colaboradores()
    {
        return $this->hasMany('App\Models\Colaborador');
    }
}
