<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DisturbiosSexuais extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];

    public function sexualidades()
    {

        return $this->belongsToMany(Sexualidade::class, 'disturbios_vidasex');
    }
}
