<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AuteursLivres extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auteurs_livres', function (Blueprint $table) {
            $table->unsignedBigInteger('auteur_id');
            $table->unsignedBigInteger('livre_id');

            $table->foreign('auteur_id')
            ->references('id')
            ->on('auteurs');

            $table->foreign('livre_id')
            ->references('id')
            ->on('livres');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
