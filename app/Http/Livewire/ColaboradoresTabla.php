<?php

namespace App\Http\Livewire;

use App\Models\Colaborador;
use App\Models\Area;
use App\Models\Extension;
use App\Models\Puesto;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class ColaboradoresTabla extends Component
{
    use WithPagination;

    protected $queryString = [
        'search' => ['except' => ''],
        'perPage'
    ];

    public $search, $perPage = '5';
    public $no_colaborador;

    public function render()
    {

            return view('livewire.colaboradores-tabla', [
                'colaboradores' => DB::table('infoColaborador')->where('no_colaborador', 'LIKE', "%{$this->search}%")
                    ->orWhere('nombre_completo', 'LIKE', "%{$this->search}%")
                    ->paginate($this->perPage),
                'areas' => Area::all(),
                'puestos' => Puesto::join('nivel', 'nivel.id', 'puesto.nivel_id')
                    ->select('puesto.id', 'puesto.especialidad_puesto', 'nivel.nombre_nivel')
                    ->get(),
                'extensiones' => Extension::all()
            ]);
    }

    public function baja($no_colaborador)
    {
        DB::table('colaborador')->where('no_colaborador', $no_colaborador)
            ->update([
                'estado_colaborador' => 0
            ]);

        $this->flash('success', 'Dado de baja correctamente', [
            'position' =>  'top-end',
            'timer' =>  3000,
            'toast' =>  true,
            'text' =>  '',
            'confirmButtonText' =>  'Ok',
            'cancelButtonText' =>  'Cancel',
            'showCancelButton' =>  false,
            'showConfirmButton' =>  false,
        ]);

        return redirect()->route("dashboard");
    }

    public function alta($no_colaborador)
    {
        DB::table('colaborador')->where('no_colaborador', $no_colaborador)
            ->update([
                'estado_colaborador' => 1
            ]);

        $this->flash('success', 'Dado de alta correctamente', [
            'position' =>  'top-end',
            'timer' =>  3000,
            'toast' =>  true,
            'text' =>  '',
            'confirmButtonText' =>  'Ok',
            'cancelButtonText' =>  'Cancel',
            'showCancelButton' =>  false,
            'showConfirmButton' =>  false,
        ]);

        return redirect()->route("dashboard");
    }
    
}
