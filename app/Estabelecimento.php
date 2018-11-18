<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;


class Estabelecimento extends Model
{
    use softDeletes;
    protected $fillable = ['nomefantasia','razaosocial','tipo','email','cnpj','estado','cidade','cep','endereco','data'];
    //protected $states = ['deleted_at'];
}
