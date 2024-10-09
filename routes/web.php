<?php

use App\Livewire\DetalleAmigoSecreto;
use App\Livewire\GrupoForm;
use App\Livewire\ParticipanteForm;
use Illuminate\Support\Facades\Route;


Route::get('/', GrupoForm::class);
Route::get('/grupo/{grupo}', ParticipanteForm::class)->name('grupo.participante');
Route::get('/grupo/{grupo}/view/detail/friend/{participante}', DetalleAmigoSecreto::class)->name('participante.detalle');
