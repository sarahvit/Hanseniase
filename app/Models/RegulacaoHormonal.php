<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegulacaoHormonal extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function necessidades_psicobiologicas()
    {
        return $this->hasMany(NecessidadesPsicobiologicas::class);
    }
}
