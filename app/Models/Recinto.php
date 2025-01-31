<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

//Generated By PlantUML Command
class Recinto extends Model
{
    protected $fillable = [
        'nombre',
    ];

    public function animals()
    {
        return $this->hasMany(Animal::class, 'recinto_id');
    }
}
