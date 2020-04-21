<?php

namespace App\Model\imperio;

use Illuminate\Database\Eloquent\Model;

class CadastroSite extends Model
{
    protected $fillable = [
        'nome', 'email','telefone','cep', 'rua','numero','bairro','cidade','uf'
    ];
}
