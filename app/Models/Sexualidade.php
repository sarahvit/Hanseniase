<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sexualidade extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];

    public function disturbios_sexuais()
    {

        return $this->belongsToMany(DisturbiosSexuais::class, 'disturbios_vidasex');
    }
}
