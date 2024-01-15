<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyeccion extends Model
{
    use HasFactory;

    public function pelicula()
    {
        $this->belongsTo(pelicula::class);
    }

    public function sala()
    {
        $this->belongsTo(sala::class);
    }

    public function entrada()
    {
        $this->hasMany(entrada::class);
    }
}
