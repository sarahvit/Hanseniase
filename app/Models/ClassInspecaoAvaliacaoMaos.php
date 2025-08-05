<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ClassInspecaoAvaliacaoMaos extends Model
{
    use HasFactory;
    public function inspecao_avaliacao_maos_dir(){

        return $this-> hasMany(InspecaoAvaliacaoMaos::class);
    }
    public function inspecao_avaliacao_maos_esq(){

        return $this-> hasMany(InspecaoAvaliacaoMaos::class);
    }
}
