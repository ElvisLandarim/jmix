<?php

namespace jmix;

use Illuminate\Database\Eloquent\Model;

class GrupoCliente extends Model
{
    protected $table = 'grupoclientes';

    protected $fillable = [
        'nomegrupo'
    ];
}
