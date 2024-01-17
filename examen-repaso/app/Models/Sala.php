<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    use HasFactory;

    public function Proyecciones()
    {
        return $this->hasMany(Proyeccion::class);
    }
}
