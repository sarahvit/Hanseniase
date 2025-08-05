<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QualidadeSono extends Model
{
    use HasFactory;
    public function sonos()
    {
        return $this->hasToMany(Sono::class);
    }
}
