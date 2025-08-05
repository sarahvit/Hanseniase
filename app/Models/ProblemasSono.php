<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProblemasSono extends Model
{
    use HasFactory;
    
    public function sonos()
    {
        return $this->belongsToMany(Sono::class, 'sonoproblemas');
    }
    
}
