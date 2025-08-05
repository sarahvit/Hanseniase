<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laxante extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];

    public function eliminacoes()
    {

        return $this->belongsToMany(Eliminacoes::class, 'eliminacoes_laxante');
    }

}
