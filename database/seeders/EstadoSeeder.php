<?php

namespace Database\Seeders;

use App\Models\Estado;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $estado = new Estado();
        $estado->nombre = "Libre";
        $estado->save();

        $estado = new Estado();
        $estado->nombre = "Reservado";
        $estado->save();

    }
}
