<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fala extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];

    public function percepcoes_sentido()
    {

        return $this->belongsToMany(PercepcaoSentidos::class, 'percepcao_fala');
    }
}
