<?php

namespace App\Model\imperio;

use Illuminate\Database\Eloquent\Model;

class iten extends Model
{
    protected $fillable = [
        'produtos_id',	
        'orcamentos_id',
        'quantidade' 
    ];
    public function produto()
    {
        return $this->hasOne(produtos::class,'id','produtos_id');
    }
}
