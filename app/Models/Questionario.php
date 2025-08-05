<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questionario extends Model
{
    
    use HasFactory;
    protected $guarded = [
        'id',
    ];

    public function scopeSearch($query, $value)
{
    $query->whereHas('paciente', function ($query) use ($value) {
            $query->where('nome', 'like', "%{$value}%");
        })
        ->orWhereHas('user', function ($query) use ($value) {
            $query->where('name', 'like', "%{$value}%");
        });
        
}

    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }

    public function necessidade_psicobiologica()
    {
        return $this->belongsTo(NecessidadesPsicobiologicas::class);
    }

    public function necessidade_psicosocial()
    {
        return $this->belongsTo(NecessidadesPsicosociais::class);
    }

    public function necessidade_espiritual()
    {
        return $this->belongsTo(NecessidadesPsicoespirituais::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function terapeutica()
    {
        return $this->belongsTo(Terapeutica::class);
    }
}
