<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassSinaisPes extends Model
{
    use HasFactory;
    public function sinais_pes_dir()
    {

        return $this->hasMany(SinaisPes::class);
    }
    public function sinais_pes_esq()
    {

        return $this->hasMany(SinaisPes::class);
    }
}
