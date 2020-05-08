<?php

namespace App\Model\imperio;

use Illuminate\Database\Eloquent\Model;

class orcamento extends Model
{
    protected $fillable = [
        'cadastro_sites_id',
        'email_enviado',
        'email_data_hora'
    ];
    public function itens()
    {
        return $this->hasMany(iten::class,'orcamentos_id','id');
    }
    public function user()
    {
        return $this->hasOne(CadastroSite::class, 'id','cadastro_sites_id');
    }
}
