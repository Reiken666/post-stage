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
        $tab_auteur=\App\Models\Auteur::factory()->count(5)->create();
        $tab_genre=\App\Models\Genre::factory()->count(5)->create();
        $tab_livres=\App\Models\Livre::factory()->count(5)->create();

        foreach(\App\Models\Livre::all() as $Livre) {
            $auteurs = \App\Models\Auteur::all()->random(rand(1,5));
            $genre = \App\Models\Genre::all()->random(rand(1,5));
            $Livre->auteurs()->saveMany($auteurs);
            $Livre->genre()->saveMany($genre);
        }
    }
}

