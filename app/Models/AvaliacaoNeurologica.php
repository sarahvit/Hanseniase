<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AvaliacaoNeurologica extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];
    public function necessidades_psicobiologicas()
    {

        return $this->hasMany(NecessidadesPsicobiologicas::class);
    }
    public function face_nariz()
    {

        return $this->belongsTo(FaceNariz::class);
    }
    public function face_olho()
    {

        return $this->belongsTo(FaceOlho::class);
    }
    public function membro_superior_queixa()
    {

        return $this->belongsTo(MembrosSuperioresQueixas::class);
    }
    public function membro_superior_forca()
    {

        return $this->belongsTo(MembrosSuperioresForca::class);
    }
    public function inspecao_avaliacao_mao()
    {

        return $this->belongsTo(InspecaoAvaliacaoMaos::class);
    }
    public function membros_inf_queixa()
    {

        return $this->belongsTo(MembrosInferioresQueixas::class);
    }
     public function membros_inf_forca()
    {

        return $this->belongsTo(MembrosInferioresForca::class);
    }
    public function inspecao_avaliacao_pe()
    {

        return $this->belongsTo(InspecaoAvaliacaoPes::class);
    }
    public function sinais_olho()
    {

        return $this->belongsTo(SinaisOlhos::class);
    }
    public function sinais_mao()
    {

        return $this->belongsTo(SinaisMaos::class);
    }
    public function sinais_pe()
    {

        return $this->belongsTo(SinaisPes::class);
    }
}
