<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = [
        'cpf', 'cpfProprietarioEmpresa', 'nomeEmpresa', 'email', 'nome', 'status','senha',
    ];
}
