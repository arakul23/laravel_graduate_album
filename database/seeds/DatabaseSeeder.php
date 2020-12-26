<?php

use Database\Seeders\StudentsTableSeeder;
use Database\Seeders\DepartmentsTableSeeder;
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
        $this->call([StudentsTableSeeder::class, DepartmentsTableSeeder::class]);
    }
}
