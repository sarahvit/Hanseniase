<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ouvido extends Model
{
    public function percepcoes_sentido()
    {
        return $this->belongsToMany(PercepcaoSentidos::class,'percepcao_ouvidos');
    }
}
