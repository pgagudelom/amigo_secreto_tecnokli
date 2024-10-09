<?php

namespace App\Livewire;

use App\Mail\MailInfoGroup;
use App\Models\Grupo;
use Livewire\Component;
use Hashids\Hashids;
use Mail;

class GrupoForm extends Component
{

    public $nombre, $grupo, $extra_field_honeypot, $email_group;

    public function render()
    {
        return view('livewire.grupo-form');
    }

    public function messages(){
        return [
            'nombre.required' => 'El nombre es obligatorio',
            'nombre.unique' => 'Este nombre del grupo ya existe',
            'email_group.required' => 'El correo electrónico es obligatorio'
        ];
    }

    public function crearGrupo()
    {

        $hashids = new Hashids('tecnokli_amigo_secreto', 10);

        if ($this->extra_field_honeypot) {
            session()->flash('message', 'Error en el registro');
            return; // Esto podría ser un bot
        }

        $this->validate([
            'nombre' => 'required|unique:grupos,nombre',
            'extra_field_honeypot' => 'max:0',
            'email_group' => 'required'
        ]);

        $grupo = Grupo::create([
            'nombre' => $this->nombre,
            'email_group' => $this->email_group
        ]);

        $grupoIdEncriptado = $hashids->encode($grupo->id);

        $grupoCreado = Grupo::find($grupo->id);
        $grupoCreado->update(['url_encrypt_group' => route('grupo.participante', $grupoIdEncriptado)]);

        //Enviamos correo
        Mail::to($grupo->email_group)->send(new MailInfoGroup($grupo));

        return redirect()->route('grupo.participante', [
            'grupo' => $grupoIdEncriptado,
            'is_admin' => 1
        ]);
    }
}
