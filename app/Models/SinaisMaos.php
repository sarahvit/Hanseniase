<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SinaisMaos extends Model
{
    use HasFactory;

    protected $guarded = ['id',
    ];
    public function avaliacoes_neuro()
    {
        return $this->hasMany(AvaliacaoNeurologica::class);
    }
    public function class_sinal_mao_dir()
    {
        return $this->belongsTo(ClassSinaisMaos::class);
    }

    public function class_sinal_mao_esq()
    {
        return $this->belongsTo(ClassSinaisMaos::class);
    }
}
