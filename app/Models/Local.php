<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    protected $table = 'locales';
    use HasFactory;

    protected $fillable = [
        'nombre',
        'direccion',
        'telefono',
        'imagen',
        'user_id'
    ];

    public function canchas()
    {
        return $this->hasMany(Cancha::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

}
