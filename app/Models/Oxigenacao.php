<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Oxigenacao extends Model
{
    public function necessidades_psicobiologicas()
    {
        return $this->hasMany(NecessidadesPsicobiologicas::class);
    }
    public function ruido_adventicio()
    {
        return $this->belongsTo(RuidosAdventicio::class);
    }
}
