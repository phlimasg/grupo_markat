<?php

namespace App\Model\imperio;

use Illuminate\Database\Eloquent\Model;

class produtos_img extends Model
{
    protected $fillable = [
        'produtos_id', 'url'
    ];
}
