<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SonoMedicamentos extends Model
{
    public function sonos()
    {
        return $this->belongsToMany(Sono::class, 'medicamentos_sono');
    }
}
