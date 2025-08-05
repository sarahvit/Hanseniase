<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RedeEsgoto extends Model
{
    use HasFactory;
    protected $guarded = [];
     public function abrigos()
    {
        return $this->hasMany(Abrigo::class);
    }
}
