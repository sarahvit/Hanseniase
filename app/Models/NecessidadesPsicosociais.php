<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NecessidadesPsicosociais extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function questionarios()
    {
        return $this->hasMany(Questionario::class);
    }
    public function recreacoes()
    {
        return $this->belongsToMany(Recreacao::class,'recreacao_necessidades');
    }
    public function amor_aceitacao()
    {
        return $this->belongsTo(AmorAceitacao::class);
    }

    public function comunicacao()
    {
        return $this->belongsTo(Comunicacao::class);
    }

    
}
