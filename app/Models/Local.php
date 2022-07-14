<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    protected $table = 'locales';
    use HasFactory;

    public function canchas()
    {
        return $this->hasMany(Cancha::class);
    }

}
