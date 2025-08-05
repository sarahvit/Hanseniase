<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegulacaoNeurologica extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function necessidades_psicobiologicas()
    {
        return $this->hasMany(NecessidadesPsicobiologicas::class);
    }
    public function comportamento_reg_neuro()
    {
        return $this->belongsTo(ComportamentoRegulacaoNeuro::class);
    }
}
