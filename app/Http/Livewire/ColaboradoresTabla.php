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

    protected $queryString = ['search' => ['except' => '']];

    public $search, $perPage = '5';
    public $loadingIndicator = true;
    public $no_colaborador;

    public function render()
    {
        if ($this->search == 'activo') {
            return view('livewire.colaboradores-tabla', [
                'colaboradores' => Colaborador::where('no_colaborador', 'LIKE', "%{$this->search}%")
                    ->orWhere('nombre', 'LIKE', "%{$this->search}%")
                    ->orWhere('estado_colaborador', 1)
                    ->paginate($this->perPage)
            ]);
        } else if ($this->search == 'inactivo') {
            return view('livewire.colaboradores-tabla', [
                'colaboradores' => Colaborador::where('no_colaborador', 'LIKE', "%{$this->search}%")
                    ->orWhere('nombre', 'LIKE', "%{$this->search}%")
                    ->orWhere('estado_colaborador', 0)
                    ->paginate($this->perPage)
            ]);
        } else {

            return view('livewire.colaboradores-tabla', [
                'colaboradores' => Colaborador::where('no_colaborador', 'LIKE', "%{$this->search}%")
                    ->orWhere('nombre', 'LIKE', "%{$this->search}%")
                    ->paginate($this->perPage),
                'areas' => Area::all(),
                'puestos' => Puesto::join('nivel', 'nivel.id', 'puesto.nivel_id')
                    ->select('puesto.id', 'puesto.especialidad_puesto', 'nivel.nombre_nivel')
                    ->get(),
                'extensiones' => Extension::all()
            ]);
        }
    }

    public function baja($no_colaborador)
    {

        DB::table('colaborador')->where('no_colaborador', $no_colaborador)
            ->update([
                'estado_colaborador' => 0
            ]);
        return redirect("dashboard");
    }

    public function alta($no_colaborador)
    {

        DB::table('colaborador')->where('no_colaborador', $no_colaborador)
            ->update([
                'estado_colaborador' => 1
            ]);
        return redirect("dashboard");
    }
}
