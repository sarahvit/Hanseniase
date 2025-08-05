<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassSinaisMaos extends Model
{
    use HasFactory;
    public function sinais_maos_dir()
    {

        return $this->hasMany(SinaisMaos::class);
    }
    public function sinais_maos_esq()
    {

        return $this->hasMany(SinaisMaos::class);
    }
}
