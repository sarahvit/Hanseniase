<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SinaisOlhos extends Model
{
    use HasFactory;
    public function avaliacoes_neuro()
    {
        return $this->hasMany(AvaliacaoNeurologica::class);
    }
    public function class_sinal_olho_dir()
    {

        return $this->belongsTo(ClassSinaisOlhos::class);
    }
    public function class_sinal_olho_esq()
    {

        return $this->belongsTo(ClassSinaisOlhos::class);
    }
}
