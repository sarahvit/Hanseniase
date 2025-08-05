<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SinaisPes extends Model
{
    use HasFactory;
    public function avaliacoes_neuro()
    {
        return $this->hasMany(AvaliacaoNeurologica::class);
    }
    public function class_sinal_pe_dir()
    {

        return $this->belongsTo( ClassSinaisPes::class);
    }
    public function class_sinal_pe_esq()
    {

        return $this->belongsTo(ClassSinaisPes::class);
    }
}
