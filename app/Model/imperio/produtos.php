<?php

namespace App\Model\imperio;

use Illuminate\Database\Eloquent\Model;

class produtos extends Model
{
    protected $fillable = [
        'nome', 'descricao','valor','uni_medida', 'quantidade'
    ];
    public function imagem()
    {
        return $this->hasMany(produtos_img::class);
    }
}
