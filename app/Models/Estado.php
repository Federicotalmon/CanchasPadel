<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table = 'estados';
    use HasFactory;

    public function turnos()
    {
        return $this->hasMany(Turno::class);
    }
}
