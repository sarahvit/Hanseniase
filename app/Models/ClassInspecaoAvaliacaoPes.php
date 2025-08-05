<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClassInspecaoAvaliacaoPes extends Model
{
     public function inspecao_avaliacao_pes_dir(){

        return $this-> hasMany(InspecaoAvaliacaoPes::class);
    }
    public function inspecao_avaliacao_pes_esq(){

        return $this-> hasMany(InspecaoAvaliacaoPes::class);
    }
}
