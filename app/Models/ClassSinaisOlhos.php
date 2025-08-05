<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassSinaisOlhos extends Model
{
    use HasFactory;
    public function sinais_olhos_dir()
    {

        return $this->hasMany(SinaisOlhos::class);
    }
    public function sinais_olhos_esq()
    {

        return $this->hasMany(SinaisOlhos::class);
    }
}
