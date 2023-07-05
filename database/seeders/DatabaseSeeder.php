<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    // execution du seeder pour remplir les tables types et roles
    public function run()
    {
        
        $this->call(TypesTableSeeder::class);
    }
}
