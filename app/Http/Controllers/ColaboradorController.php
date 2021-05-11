<?php

namespace App\Http\Controllers;

use PDF;
use Carbon\Carbon;
use App\Models\Colaborador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ColaboradorController extends Controller
{
    public function createPDF()
    {

        $datosContrato = Colaborador::where('no_colaborador', '144910')->get();
        $infoColaborador = DB::table('infocolaborador')->where('no_colaborador', '144910')->get();

        $fecha_inicio_dia = Carbon::parse($datosContrato[0]->fecha_ingreso)->isoFormat('D');
        $fecha_inicio_mes = Carbon::parse($datosContrato[0]->fecha_ingreso)->isoFormat('MMMM');
        $fecha_inicio_year = Carbon::parse($datosContrato[0]->fecha_ingreso)->isoFormat('YYYY');


        $fecha_inicial_contrato = '2021-05-11';
        $fecha_inicial_contrato_dia = Carbon::parse($fecha_inicial_contrato)->isoFormat('D');
        $fecha_inicial_contrato_mes = Carbon::parse($fecha_inicial_contrato)->isoFormat('MMMM');
        $fecha_inicial_contrato_year = Carbon::parse($fecha_inicial_contrato)->isoFormat('YYYY');

        $fecha_final_contrato = '2021-06-11';
        $fecha_final_contrato_dia = Carbon::parse($fecha_final_contrato)->isoFormat('D');
        $fecha_final_contrato_mes = Carbon::parse($fecha_final_contrato)->isoFormat('MMMM');
        $fecha_final_contrato_year = Carbon::parse($fecha_final_contrato)->isoFormat('YYYY');

        $sueldo = '8,000.00';
        $sueldoLetra = 'Ocho Mil Pesos';
        $descripcionPuesto = 'Realiza el arte para todo tipo de comunicado interno, gestionarlas redes sociales internas, brinda apoyo log[istico y desarrollo en proyectos, programas, campañas, eventos, etc., realiza el levantamiento de imagenes en todo tipo de evento interno de la empresa, emite y coloca los impresos en todos los tableros internos manteniendolos actualizados semanalmente.';
        //return response()->json(compact("datosContrato"));
        $pdf = PDF::loadView(
            'PDF/contrato_administrativo',
            compact(
                "datosContrato",
                'infoColaborador',
                'descripcionPuesto',
                'sueldo',
                'sueldoLetra',
                'fecha_inicio_dia',
                'fecha_inicio_mes',
                'fecha_inicio_year',
                'fecha_inicial_contrato_dia',
                'fecha_inicial_contrato_mes',
                'fecha_inicial_contrato_year',
                'fecha_final_contrato_dia',
                'fecha_final_contrato_mes',
                'fecha_final_contrato_year'
            )
        );
        return $pdf->stream('colaboradores.pdf');
    }
}
