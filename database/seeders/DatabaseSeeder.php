<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call([
            UserSeeder::class,
            Contact_TypeSeeder::class,
            Contact_StatusSeeder::class,
            Contact_CategorySeeder::class,
            ContactSeeder::class,
        ]);
    }
}
