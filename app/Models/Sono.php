<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sono extends Model
{
    public function necessidades_psicobiologicas()
    {
        return $this->hasMany(NecessidadesPsicobiologicas::class);
    }
    public function problemas_sono()
    {
        return $this->belongsToMany(ProblemasSono::class, 'sonoproblemas');
}
public function medicamentos_sono()
    {
        return $this->belongsToMany(SonoMedicamentos::class, 'medicamentos_sono');
    }
public function qualidades_sono()
    {
        return $this->belongsTo(QualidadeSono::class, 'medicamentos_sono');
    }
}