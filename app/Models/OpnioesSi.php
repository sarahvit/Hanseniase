<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OpnioesSi extends Model
{
    public function amor_aceitacoes()
    {
        return $this->belongsToMany(AmorAceitacao::class,'opnioes_amor');
    }
}
