<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eliminacoes extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];

    public function laxantes()
    {

        return $this->belongsToMany(Laxante::class, 'eliminacoes_laxante');
    }
    public function necessidades_psicobiologicas()
    {

        return $this->hasMany(NecessidadesPsicobiologicas::class);
    } 
}
    