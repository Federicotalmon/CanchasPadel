<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(LocalSeeder::class);
        $this->call(CanchaSeeder::class);
        $this->call(EstadoSeeder::class);
        $this->call(TurnoSeeder::class);
    }
}
