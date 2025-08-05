<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comunicacao extends Model
{
    use HasFactory;
    protected $guarded = ['id',
];

    public function necessidades_piscosociais(){

        return $this->hasMany(NecessidadesPsicosociais::class);
    }
}
