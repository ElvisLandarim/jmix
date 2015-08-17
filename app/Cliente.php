<?php

namespace jmix;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';

    protected $fillable = [
        'nome',
        'sobrenome',
        'cpf',
        'rg',
        'email',
        'telefone',
        'celular',
        'credito',
        'id_categoriacliente'
    ];
}
