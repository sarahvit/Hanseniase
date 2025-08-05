<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoCivil extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];

    public function pacientes()
    {

        return $this->hasMany(Paciente::class);
    }
    
}
