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

        $user = new User();
        $user->nombre = "Matias Talmon";
        $user->telefono = 2915024070;
        $user->email = "matiastalmon@gmail.com";
        $user->username = "Mtalmon";
        $user->password = bcrypt('password');
        $user->save();

    }
}
