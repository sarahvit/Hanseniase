<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZonaMoradia extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];

    public function abrigos()
    {

        return $this->hasMany(Abrigo::class);
    }
}
