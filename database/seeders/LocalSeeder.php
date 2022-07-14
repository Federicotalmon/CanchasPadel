<?php

namespace Database\Seeders;

use App\Models\Local;
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
        $local->save();


        $img = file_get_contents("https://scontent.fcnq2-2.fna.fbcdn.net/v/t1.6435-9/134130211_261275285674172_7525319496645181994_n.jpg?stp=cp0_dst-jpg_e15_fr_q65&_nc_cat=111&ccb=1-7&_nc_sid=dd9801&_nc_ohc=x82apIDJxpkAX9eSWaq&_nc_ht=scontent.fcnq2-2.fna&oh=00_AT8vUN3HCOcEROGFqWVdqmxpxTNiDUvACbOYdTV-PlMR4Q&oe=62F4BAB6");
        $local = new Local();
        $local->telefono = 3482400000;
        $local->direccion = "Lovatto 1201";
        $local->nombre = "Platense Padel";
        $local->imagen = base64_encode($img);
        $local->save();
        

        $img = file_get_contents("https://scontent.fcnq2-1.fna.fbcdn.net/v/t31.18172-8/12087267_1632733753671474_9210242639831245239_o.jpg?_nc_cat=105&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=TIojZm_iTmEAX-39TtA&_nc_oc=AQlrI7l9MYlj7MobrMgom5OQ7oNp1-Tp95vrVmmDdY0AU6Z6ydiysDhhwz2NrP4isug&_nc_ht=scontent.fcnq2-1.fna&oh=00_AT-81gQ1yBJG_PZKbyY3n94K_Ymlvh4gjfo5f6Kv6FXmBg&oe=62F42234");
        $local = new Local();
        $local->telefono = 291400001;
        $local->direccion = "Cerrito 2055";
        $local->nombre = "Casablanca Padel";
        $local->imagen = base64_encode($img);
        $local->save();
        

        $img = file_get_contents("https://www.pwcc.cl/images/view/cGhvdG9zL2ViNjk5MDRiZjVkZWE5Y2U0ZGJmMDA4ODk4YjVhZWVkZWNiNzAxOTguanBn");
        $local = new Local();
        $local->telefono = 3482400002;
        $local->direccion = "Calle 40 800";
        $local->nombre = "La Carola Padel";
        $local->imagen = base64_encode($img);
        $local->save();
        

        $img = file_get_contents("https://infodeportes.com.ar/wp-content/uploads/2022/01/Stylo-padel-club-abre-sus-puertas-en-ciudad-Perico.png");
        $local = new Local();
        $local->telefono = 3482400003;
        $local->direccion = "Bolivar 310";
        $local->nombre = "Afro Padel";
        $local->imagen = base64_encode($img);
        $local->save();
        
    }
}
