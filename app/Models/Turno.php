<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turno extends Model
{
    protected $table = 'turnos';
    use HasFactory;

    public function canchas()
    {
        return $this->belongsTo(Cancha::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function estados()
    {
        return $this->belongsTo(Estado::class);
    }

}
