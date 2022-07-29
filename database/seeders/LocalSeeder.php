<?php

namespace Database\Seeders;

use App\Models\Local;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $img = file_get_contents("https://imagizer.imageshack.com/v2/600x595q90/923/GKdyMC.jpg");
        $local = new Local();
        $local->telefono = 3482655307;
        $local->direccion = "Habbeger 1274";
        $local->nombre = "El balcon";
        $local->imagen = base64_encode($img);
        $local->user_id = User::find(4)->id;
        $local->save();


        $img = file_get_contents("https://scontent.fcnq2-2.fna.fbcdn.net/v/t1.6435-9/134130211_261275285674172_7525319496645181994_n.jpg?stp=cp0_dst-jpg_e15_fr_q65&_nc_cat=111&ccb=1-7&_nc_sid=dd9801&_nc_ohc=x82apIDJxpkAX9eSWaq&_nc_ht=scontent.fcnq2-2.fna&oh=00_AT8vUN3HCOcEROGFqWVdqmxpxTNiDUvACbOYdTV-PlMR4Q&oe=62F4BAB6");
        $local = new Local();
        $local->telefono = 3482400000;
        $local->direccion = "Lovatto 1201";
        $local->nombre = "Platense Padel";
        $local->imagen = base64_encode($img);
        $local->user_id = User::find(5)->id;
        $local->save();
        

    }
}
