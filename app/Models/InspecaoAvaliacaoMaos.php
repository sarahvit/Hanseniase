<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InspecaoAvaliacaoMaos extends Model
{
    use HasFactory;

    protected $guarded = ['id',
    ];
    public function avaliacoes_neuro()
    {
        return $this->hasMany(AvaliacaoNeurologica::class, 'Inspeção_avaliacao_maos');
    }
    public function classificacao_mao_direita()
    {
        return $this->belongsTo(ClassInspecaoAvaliacaoMaos::class, 'classificacao_mao_direita');
    }

    public function classificacao_mao_esquerda()
    {
        return $this->belongsTo(ClassInspecaoAvaliacaoMaos::class, 'classificacao_mao_esquerda');
    }

    
}

