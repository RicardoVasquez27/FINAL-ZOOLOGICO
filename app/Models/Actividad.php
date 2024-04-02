<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

//Generated By PlantUML Command
class Actividad extends Model
{
    protected $fillable = [
        'nombre',
        'fecha',
        'hora',
    ];

    public function actividad()
    {
        return $this->hasMany(Animal::class,'actividad_id');
    }
}
