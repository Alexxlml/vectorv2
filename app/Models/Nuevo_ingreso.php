<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nuevo_ingreso extends Model
{
    use HasFactory;

    protected $fillable =[
        'curp',
        'curpDocumento',
        'nombre_1',
        'nombre_2',
        'ap_paterno',
        'ap_materno',
        'fecha_nacimiento',
        'actaNacimiento',
        'escolaridad_id',
        'constanciaEstudios',
        'especialidadEstudios',
        'genero_id',
        'estado_civil_id',
        'actaMatrimonio',
        'rfc',
        'rfcDocumento',
        'no_seguro_social',
        'altaImssDoc',
        'domicilio',
        'colonia',
        'municipio',
        'estado',
        'nacionalidad_id',
        'codigo_postal',
        'comprobanteDomicilio',
        'paternidad_id',
        'actasHijo',
        'cartasRecomendacion',
        'cartillaMilitar',
        'cartaNoPenales',
        'credencilIFE',
        'buroCredito',
        'foto',
        'correo',
        'tel_fijo',
        'tel_movil'
    ];

    public function escolaridad(){
        return $this->belongsTo('App\Models\Escolaridad');
    }

    public function genero(){
        return $this->belongsTo('App\Models\Genero');
    }

    public function estado_civil(){
        return $this->belongsTo('App\Models\Estado_civil');
    }

    public function nacionalidad(){
        return $this->hasMany('App\Models\Nacionalidad');
    }

}
