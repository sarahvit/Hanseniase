<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RuidosAdventicio extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function oxigenacoes()
    {
        return $this->hasMany(Oxigenacao::class);
    }
}
