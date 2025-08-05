<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recreacao extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function necessidades_psicosociais()
    {
        return $this->belongsToMany(NecessidadesPsicosociais::class,'recreacao_necessidades');
    }
}
