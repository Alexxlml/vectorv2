<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Colaborador;
use App\Models\Tipo_vehiculo;
use App\Models\Uniformes_talla;
use App\Models\Uniformes_prenda;
use App\Models\Uniformes_paquete;
use Illuminate\Support\Facades\DB;

class RegistroUniformes extends Component
{

    public $colaborador;

    public $paquetes, $prendas, $tallas;

    public $banderaPrueba = false;
    public $totalSteps = 0;
    public $tope = 0;
    public $currentStep = 0;
    public $paqueteId = 4;
    public $nombrePaquete;
    public $nombrePrenda;
    public $playera60;

    public function mount($no_colaborador)
    {
        $this->colaborador = Colaborador::find($no_colaborador);
        $this->paquetes = DB::table('vu_paquete_prenda')->where('paquete_id', $this->paqueteId)->get();
        $this->totalSteps = count($this->paquetes) - 1;
        $this->nombrePaquete = $this->paquetes[0]->nombre_paquete;
        /* dd($this->paquetes); */
        /* dd($this->totalSteps); */
        $this->prendas = Uniformes_prenda::find(1);
        /* dd($this->tallas); */
        $this->tallaMethod();
    }

    public function render()
    {
        $tiposVehiculo = Tipo_vehiculo::all();

        return view('livewire.registro-uniformes', compact(
            'tiposVehiculo'
        ))->layout('layouts.guest');
    }

    public function tallaMethod()
    {
        if ($this->paqueteId == 1) {
            if ($this->currentStep == 0) {
                $this->tallas = Uniformes_talla::where('uniformes_prenda_id', 1)->get();
            }
        }
        if ($this->paqueteId == 2) {
            if ($this->currentStep == 0) {
                $this->tallas = Uniformes_talla::where('uniformes_prenda_id', 14)->get();
            }
            if ($this->currentStep == 1) {
                $this->tallas = Uniformes_talla::where('uniformes_prenda_id', 3)->get();
            }
            if ($this->currentStep == 2) {
                $this->tallas = Uniformes_talla::where('uniformes_prenda_id', 4)->get();
            }
            if ($this->currentStep == 3) {
                $this->tallas = Uniformes_talla::where('uniformes_prenda_id', 9)->get();
            }
        }
        if ($this->paqueteId == 3) {
            if ($this->currentStep == 0) {
                $this->tallas = Uniformes_talla::where('uniformes_prenda_id', 14)->get();
            }
            if ($this->currentStep == 1) {
                $this->tallas = Uniformes_talla::where('uniformes_prenda_id', 3)->get();
            }
            if ($this->currentStep == 2) {
                $this->tallas = Uniformes_talla::where('uniformes_prenda_id', 16)->get();
            }
        }
        if ($this->paqueteId == 4) {
            if ($this->currentStep == 0) {
                $this->tallas = Uniformes_talla::where('uniformes_prenda_id', 13)->get();
            }
            if ($this->currentStep == 1) {
                $this->tallas = Uniformes_talla::where('uniformes_prenda_id', 17)->get();
            }
            if ($this->currentStep == 2) {
                $this->tallas = Uniformes_talla::where('uniformes_prenda_id', 11)->get();
            }
            if ($this->currentStep == 3) {
                $this->tallas = Uniformes_talla::where('uniformes_prenda_id', 21)->get();
            }
            if ($this->currentStep == 4) {
                $this->tallas = Uniformes_talla::where('uniformes_prenda_id', 19)->get();
            }
            if ($this->currentStep == 5) {
                $this->tallas = Uniformes_talla::where('uniformes_prenda_id', 6)->get();
            }
            if ($this->currentStep == 6) {
                $this->tallas = Uniformes_talla::where('uniformes_prenda_id', 7)->get();
            }
            if ($this->currentStep == 7) {
                $this->tallas = Uniformes_talla::where('uniformes_prenda_id', 3)->get();
            }
            if ($this->currentStep == 8) {
                $this->tallas = Uniformes_talla::where('uniformes_prenda_id', 20)->get();
            }
            if ($this->currentStep == 9) {
                $this->tallas = Uniformes_talla::where('uniformes_prenda_id', 12)->get();
            }
            if ($this->currentStep == 10) {
                $this->tallas = Uniformes_talla::where('uniformes_prenda_id', 18)->get();
            }
        }
    }

    public function increaseStep()
    {
        /* $this->resetErrorBag(); */
        /* $this->validateData(); */

        $this->currentStep++;
        if ($this->currentStep > $this->totalSteps) {
            $this->currentStep = $this->totalSteps;
        }
        $this->tallaMethod();
    }

    public function decreaseStep()
    {
        /* $this->resetErrorBag(); */

        $this->currentStep--;
        if ($this->currentStep < 0) {
            $this->currentStep = 0;
        }
        $this->tallaMethod();
    }

    public function registro()
    {
        dd("Registro");
    }

    public function tallasPaquetes()
    {
    }
}
