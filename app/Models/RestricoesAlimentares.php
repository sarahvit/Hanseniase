<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestricoesAlimentares extends Model
{
     use HasFactory;
    protected $guarded = [];
    public function nutricoes()
    {
        return $this->belongsToMany(Nutricao::class, 'nutricao_restricoes');
    }
}
