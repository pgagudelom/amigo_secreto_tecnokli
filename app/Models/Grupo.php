<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'url_encrypt_group', 'email_group'];

    public function participantes()
    {
        return $this->hasMany(Participante::class);
    }

    public function admin()
    {
        return $this->belongsTo(Participante::class, 'admin_id');
    }
}
