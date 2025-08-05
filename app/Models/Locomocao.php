<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locomocao extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];

    public function tipos_locomocao()
    {

        return $this->belongsToMany(TipoLocomocao::class, 'loc_tipos');
    }
    public function necessidades_psicobiologicas()
    {

        return $this->hasMany(NecessidadesPsicobiologicas::class);
    } 
}
