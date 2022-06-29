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
    public function run()
    {
        \App\Models\Auteur::factory()->count(5)->create();
        \App\Models\Genre::factory()->count(5)->create();
        \App\Models\Livre::factory()->count(5)->create();
    }
}
