<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cancha extends Model
{
    protected $table = 'canchas';
    use HasFactory;

    public function turnos()
    {
        return $this->hasMany(Turno::class);
    }

}
