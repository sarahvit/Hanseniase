<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NecessidadesPsicobiologicas extends Model
{
    use HasFactory;
    public function questionarios()
    {
        return $this->hasMany(Questionario::class);
    }
    public function regulacao_neuro()
    {

        return $this->belongsTo(RegulacaoNeurologica::class);
    }
    public function percepcoao_sentido()
    {

        return $this->belongsTo(PercepcaoSentidos::class);
    }
    public function Hidrtacao()
    {

        return $this->belongsTo(Hidratacao::class);
    }
    public function Nutricao()
    {

        return $this->belongsTo(Nutricao::class);
    }
    public function Sono()
    {

        return $this->belongsTo(Sono::class);
    }
    public function exercicio_autocuidado()
    {

        return $this->belongsTo(ExerciciosAutocuidado::class);
    }
    public function abrigo()
    {

        return $this->belongsTo(Abrigo::class);
    }
    public function regulacao_hormonal()
    {

        return $this->belongsTo(RegulacaoHormonal::class);
    }
    public function oxigenacao()
    {

        return $this->belongsTo(Oxigenacao::class);
    }
    public function regulacao_termica()
    {

        return $this->belongsTo(RegulacaoTermica::class);
    }
    public function eliminacao()
    {

        return $this->belongsTo(Eliminacoes::class);
    }
    public function locomocao()
    {

        return $this->belongsTo(Locomocao::class);
    }
}
