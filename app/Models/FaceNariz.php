<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaceNariz extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];

    public function avaliacoes_neuro()
    {

        return $this->hasMany(AvaliacaoNeurologica::class);
    }
}
