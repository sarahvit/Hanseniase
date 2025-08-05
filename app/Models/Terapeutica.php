<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Terapeutica extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];

    public function questionarios()
    {

        return $this->hasMany(Questionario::class);
    }
}
