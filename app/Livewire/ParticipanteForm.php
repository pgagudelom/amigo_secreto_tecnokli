<?php

namespace App\Livewire;

use App\Models\Grupo;
use App\Models\Participante;
use Crypt;
use Hashids\Hashids;
use Illuminate\Contracts\Encryption\DecryptException;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithFileUploads;

class ParticipanteForm extends Component
{


    use WithFileUploads;

    #[Url]
    public $is_admin = 0;
    public $grupo, $urlLink;
    public $nombre;
    public $clave;
    public $regalos = [];
    public $fotos;

    public function mount($grupo)
    {

        $hashids = new Hashids('tecnokli_amigo_secreto', 10);

        try {
            // Desencriptar el ID del grupo
            $grupoId = $hashids->decode($grupo)[0] ?? null;

            // Buscar el grupo en la base de datos
            $this->grupo = Grupo::findOrFail($grupoId);
        } catch (DecryptException $e) {
            // Si la desencriptación falla, mostramos un error 404
            abort(404, 'Grupo no encontrado');
        }
    }


    public function render()
    {

        return view('livewire.participante-form', [
            'participantes' => $this->grupo->participantes
        ]);
    }

    protected $rules = [
        'nombre' => 'required',
        'clave' => 'required',
        'regalos' => 'required|array|min:1',
        'fotos.*' => 'mimes:jpg,jpeg,png,gif|max:10240'
    ];

    public function messages(){
        return [
            'nombre.required' => 'El nombre es obligatorio',
            'clave.required' => 'La clave es obligatoria',
            'regalos.required' => 'Debes escribir al menos un regalo',
            'fotos.max' => 'Las fotos es muy grande'
        ];
    }


    public function registrarParticipante()
    {
        $this->validate();


        $participante = Participante::create([
            'nombre' => $this->nombre,
            'clave' => $this->clave,
            'grupo_id' => $this->grupo->id,
            'is_admin' => $this->is_admin,
            'regalos' => json_encode($this->regalos), // Almacenar como JSON
        ]);


        $hashids = new Hashids('tecnokli_amigo_secreto', 10);

        $grupoIdEncriptado = $hashids->encode($this->grupo->id);
        $participanteCrypt = $hashids->encode($participante->id);

        if($this->fotos){
            $this->guardarFotos($grupoIdEncriptado, $participanteCrypt);
        }

        $this->limpiarCampos();
        return redirect()->route('grupo.participante', ['grupo' => $grupoIdEncriptado]);
    }

    #[On('realizarSorteo')]
    public function realizarSorteo()
    {
        $participantes = $this->grupo->participantes->shuffle();
        $count = $participantes->count();

        foreach ($participantes as $i => $participante) {
            $participante->amigo_secreto = $participantes[($i + 1) % $count]->id; // Asignación circular
            $participante->save();
        }

        $this->dispatch('success', 'Sorteo realizado con éxito 🎊🥳🎉');
    }


    #[On('verAmigoSecreto')]
    public function verAmigoSecreto($participanteId)
    {

        $hashids = new Hashids('tecnokli_amigo_secreto', 10);

        $grupoEncriptado = $hashids->encode($this->grupo->id);
        $participanteEncriptado = $hashids->encode($participanteId);

        return redirect()->route('participante.detalle', [
            'grupo' => $grupoEncriptado, // ID del grupo
            'participante' => $participanteEncriptado // ID del participante
        ]);
    }


    public function guardarFotos($grupoId, $participante)
    {

        if ($this->fotos) {
            foreach ($this->fotos as $foto) {
                $nombreArchivo = uniqid() . '.' . $foto->getClientOriginalExtension();

                // Guardar en una subcarpeta por grupo
                $foto->storeAs("fotos/grupo_{$grupoId}/participante_{$participante}", $nombreArchivo, 'public');
            }
        }
    }


    #[On('eliminarParticipante')]
    public function eliminarme(Participante $participante)
    {
        $participante->delete();

        $this->dispatch('success', 'Participante eliminado');
    }

    public function limpiarCampos(){
         $this->nombre = '';
         $this->clave = '';
         $this->regalos = [];
         $this->fotos = '';
    }


}
