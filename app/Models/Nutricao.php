<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nutricao extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function necessidades_psicobiologicas()
    {
        return $this->hasMany(NecessidadesPsicobiologicas::class);
    }
    public function restricoes()
    {
        return $this->belongsToMany(RestricoesAlimentares::class,'nutricao_restricoes');
    }
    public function refeicoes()
    {
        return $this->belongsToMany(Refeicao::class,'refeicoesdia_nutricao');
    }
    public function principais_ref()
    {
        return $this->belongsToMany(PrincipalRefeicao::class,'nutricao_principais');
    }
}
