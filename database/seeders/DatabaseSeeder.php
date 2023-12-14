<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $equipoSeeder = new EquipoSeeder();
        $equipoSeeder->run();
        $operadorSeeder = new OperadorSeeder();
        $operadorSeeder->run();
    }
}
