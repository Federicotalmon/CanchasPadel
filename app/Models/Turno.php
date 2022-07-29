<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turno extends Model
{
    protected $table = 'turnos';
    use HasFactory;
    protected $fillable = ['estado_id','user_id'];

    public function cancha()
    {
        return $this->belongsTo(Cancha::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }

}
