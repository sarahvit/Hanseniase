<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historico extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];

    public function forma_clinica()
    {

        return $this->belongsTo(FormasClinica::class);
    }
    public function comorbidades()
    {

        return $this->belongsToMany(Comorbidade::class, 'comorbidades_historico');
    }
    public function pacientes()
    {

        return $this->hasMany(Paciente::class);
    }
}
