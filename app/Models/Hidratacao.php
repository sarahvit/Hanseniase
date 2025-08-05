<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hidratacao extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];

    public function necessidades_psicobiologicas()
    {

        return $this->hasMany(NecessidadesPsicobiologicas::class);
    }
}
