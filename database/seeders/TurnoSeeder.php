<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Turno;
use DateTime;

class TurnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $turno = new Turno();
        $turno->fecha = DateTime::createFromFormat("Y-m-d H:i", "2022-07-21 00:00");
        $turno->cancha_id = 4;
        $turno->estado_id = 1;
        $turno->save();

        $turno = new Turno();
        $turno->fecha = DateTime::createFromFormat("Y-m-d H:i", "2022-07-21 01:00");
        $turno->cancha_id = 5;
        $turno->estado_id = 1;
        $turno->save();

        $turno = new Turno();
        $turno->fecha = DateTime::createFromFormat("Y-m-d H:i", "2022-07-21 02:00");
        $turno->cancha_id = 4;
        $turno->estado_id = 1;
        $turno->save();

        $turno = new Turno();
        $turno->fecha = DateTime::createFromFormat("Y-m-d H:i", "2022-07-21 03:00");
        $turno->cancha_id = 5;
        $turno->estado_id = 1;
        $turno->save();

        $turno = new Turno();
        $turno->fecha = DateTime::createFromFormat("Y-m-d H:i", "2022-07-21 04:00");
        $turno->cancha_id = 4;
        $turno->estado_id = 1;
        $turno->save();

        $turno = new Turno();
        $turno->fecha = DateTime::createFromFormat("Y-m-d H:i", "2022-07-21 05:00");
        $turno->cancha_id = 5;
        $turno->estado_id = 1;
        $turno->save();

        $turno = new Turno();
        $turno->fecha = DateTime::createFromFormat("Y-m-d H:i", "2022-07-21 06:00");
        $turno->cancha_id = 4;
        $turno->estado_id = 1;
        $turno->save();

        $turno = new Turno();
        $turno->fecha = DateTime::createFromFormat("Y-m-d H:i", "2022-07-21 07:00");
        $turno->cancha_id = 5;
        $turno->estado_id = 1;
        $turno->save();

        $turno = new Turno();
        $turno->fecha = DateTime::createFromFormat("Y-m-d H:i", "2022-07-21 08:00");
        $turno->cancha_id = 4;
        $turno->estado_id = 1;
        $turno->save();

        $turno = new Turno();
        $turno->fecha = DateTime::createFromFormat("Y-m-d H:i", "2022-07-21 09:00");
        $turno->cancha_id = 6;
        $turno->estado_id = 2;
        $turno->user_id = 2; 
        $turno->save();

        $turno = new Turno();
        $turno->fecha = DateTime::createFromFormat("Y-m-d H:i", "2022-08-21 09:00");
        $turno->cancha_id = 6;
        $turno->estado_id = 2;
        $turno->user_id = 3; 
        $turno->save();
    }
}
