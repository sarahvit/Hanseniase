<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class AmorAceitacao extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];
    public function necessidades_piscosociais(){

        return $this->hasMany(NecessidadesPsicosociais::class);
    }
    public function emocionais(){

        return $this->belongsToMany(Emocionais::class, 'emocionais_cuidado');
    }
    public function opnioes_de_si(){

        return $this->belongsToMany(OpnioesSi::class, 'opnioes_amor');
    }
    
}
