<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// We can define the inverse of a hasOne relationship using the belongsTo method

class Abrigo extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];

    public function necessidades_piscobiologicas(){

        return $this->hasMany(NecessidadesPsicobiologicas::class);
    }
    public function zona_moradia(){

        return $this->belongsTo(ZonaMoradia::class);
    }
    public function rede_esgoto(){

        return $this->belongsTo(RedeEsgoto::class);
    }
}
