<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComportamentoRegulacaoNeuro extends Model
{
    use HasFactory;
     public function regulacoes_neurologicas()
    {

        return $this->hasMany(RegulacaoNeurologica::class);
    }
}
      