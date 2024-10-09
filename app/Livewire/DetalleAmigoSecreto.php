<?php

namespace App\Livewire;

use App\Models\Participante;
use Livewire\Component;
use Hashids\Hashids;
use Storage;

class DetalleAmigoSecreto extends Component
{
    public $grupoParametro, $participanteParametro;

    public function mount($grupo, $participante){
        $this->grupoParametro = $grupo;
        $this->participanteParametro = $participante;
    }

    public function render()
    {
        $hashids = new Hashids('tecnokli_amigo_secreto', 10);

        $participanteId = $hashids->decode($this->participanteParametro);

        $participante = Participante::find($participanteId[0]);
        $amigoSecreto =  Participante::find($participante->amigo_secreto);

        $amigoIdEncriptado = $hashids->encode($amigoSecreto->id);

        $fotos = $this->listarFotos($this->grupoParametro, $amigoIdEncriptado);

        return view('livewire.detalle-amigo-secreto', [
            'amigo' => $amigoSecreto,
            'regalos' => json_decode($amigoSecreto->regalos),
            'fotos' => $fotos,
        ]);
    }

    public function regresar(){
       return redirect()->route('grupo.participante', ['grupo' => $this->grupoParametro]);
    }

    public function listarFotos($grupoId, $participante)
{

    // Obtener los archivos del directorio especificado
    $archivos = Storage::disk('public')->files("fotos/grupo_{$grupoId}/participante_{$participante}");

    return $archivos;
}
}
