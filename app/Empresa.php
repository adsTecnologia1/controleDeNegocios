<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable = [
        'nomeEmpresa', 'cpfProprietario', 'nomeProprietario', 'telefone', 'email','endereco','ramo','status','senha',
    ];
}
