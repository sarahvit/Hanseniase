<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emocionais extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];

    public function amor_aceitacao()
    {

        return $this->belongsToMany(AmorAceitacao::class, 'emocionais_cuidado');
    }
}
