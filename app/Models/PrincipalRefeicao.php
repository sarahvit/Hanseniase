<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PrincipalRefeicao extends Model
{
    public function nutricoes()
    {
        return $this->belongsToMany(Nutricao::class,'nutricao_principais');
    }
}
