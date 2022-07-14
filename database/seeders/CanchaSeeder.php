<?php

namespace Database\Seeders;

use App\Models\Cancha;
use App\Models\Local;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CanchaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $local = Local::find(1);
        $cancha = new Cancha();
        $cancha->nombre_cancha = "Cancha 1";
        $cancha->local_id = $local->id;
        $cancha->save();

        $cancha = new Cancha();
        $cancha->nombre_cancha = "Cancha 2";
        $cancha->local_id = $local->id;
        $cancha->save();

        $local = Local::find(2);
        $cancha = new Cancha();
        $cancha->nombre_cancha = "Cancha 1";
        $cancha->local_id = $local->id;
        $cancha->save();

        $cancha = new Cancha();
        $cancha->nombre_cancha = "Cancha 2";
        $cancha->local_id = $local->id;
        $cancha->save();

        $cancha = new Cancha();
        $cancha->nombre_cancha = "Cancha blindex";
        $cancha->local_id = $local->id;
        $cancha->save();

        $cancha = new Cancha();
        $cancha->nombre_cancha = "Cancha 3";
        $cancha->local_id = $local->id;
        $cancha->save();

        $cancha = new Cancha();
        $cancha->nombre_cancha = "Cancha 4";
        $cancha->local_id = $local->id;
        $cancha->save();

        $local = Local::find(3);
        $cancha = new Cancha();
        $cancha->nombre_cancha = "Cancha 1";
        $cancha->local_id = $local->id;
        $cancha->save();

        $cancha = new Cancha();
        $cancha->nombre_cancha = "Cancha 2";
        $cancha->local_id = $local->id;
        $cancha->save();

        $cancha = new Cancha();
        $cancha->nombre_cancha = "Cancha 3";
        $cancha->local_id = $local->id;
        $cancha->save();

        $cancha = new Cancha();
        $cancha->nombre_cancha = "Cancha 4";
        $cancha->local_id = $local->id;
        $cancha->save();

        $local = Local::find(4);
        $cancha = new Cancha();
        $cancha->nombre_cancha = "Cancha blindex adelante";
        $cancha->local_id = $local->id;
        $cancha->save();

        $cancha = new Cancha();
        $cancha->nombre_cancha = "Cancha blindex atras";
        $cancha->local_id = $local->id;
        $cancha->save();

        $local = Local::find(5);
        $cancha = new Cancha();
        $cancha->nombre_cancha = "Cancha unica";
        $cancha->local_id = $local->id;
        $cancha->save();






    }
}
