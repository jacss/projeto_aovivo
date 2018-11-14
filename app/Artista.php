<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Artista extends Model
{
    use softDeletes;
    protected $fillable = ['nome','sobrenome','nomeartistico','cpf','email','estado','cidade','especialidade','descricao','nota','tipoperfil','data'];
    //protected $dates = ['deleted_at'];
    //
}
