<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Facade;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->nombre = "Federico Talmon";
        $user->telefono = 2915024107;
        $user->email = "federicotalmon@gmail.com";
        $user->username = "Ftalmon";
        $user->password = bcrypt('password');
        $user->save();
        $user->assignRole('admin');

        $user = new User();
        $user->nombre = "Matias Talmon";
        $user->telefono = 2915024070;
        $user->email = "matiastalmon@gmail.com";
        $user->username = "Mtalmon";
        $user->password = bcrypt('password');
        $user->save();
        $user->assignRole('jugador');

        $user = new User();
        $user->nombre = "Pandu Segretin";
        $user->telefono = 3482655307;
        $user->email = "pandu@gmail.com";
        $user->username = "Pandu";
        $user->password = bcrypt('password');
        $user->save();
        $user->assignRole('jugador');

        $user = new User();
        $user->nombre = "Camila Gomez";
        $user->telefono = 3482503189;
        $user->email = "camilagomez@gmail.com";
        $user->username = "Cgomez";
        $user->password = bcrypt('password');
        $user->save();
        $user->assignRole('duenio');

        $user = new User();
        $user->nombre = "Cecilia nievas";
        $user->telefono = 3482655099;
        $user->email = "cecilianievas@gmail.com";
        $user->username = "Cnievas";
        $user->password = bcrypt('password');
        $user->save();
        $user->assignRole('duenio');
    }
}
