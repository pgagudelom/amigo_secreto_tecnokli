<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'clave', 'grupo_id', 'regalos', 'amigo_secreto', 'is_admin'];

    public function grupo()
    {
        return $this->belongsTo(Grupo::class);
    }
}
