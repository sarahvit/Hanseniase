<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reside extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function pacientes()
    {
        return $this->hasMany(Paciente::class);
    }
}
