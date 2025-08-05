<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PercepcaoSentidos extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];

    public function falas()
    {

        return $this->belongsToMany(Fala::class, 'percepcao_fala');
    }
    public function analises_tato()
    {

        return $this->belongsToMany(AnaliseTato::class, 'percepcao_tato');
    }
    public function narizes()
    {

        return $this->belongsToMany(Nariz::class, 'percepcao_narizs');
    }
    public function ouvidos()
    {

        return $this->belongsToMany(Ouvido::class, 'percepcao_ouvidos');
    }
    public function necessidades_psicobiologicas()
    {

        return $this->hasMany(NecessidadesPsicobiologicas::class);
    } 
}
