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
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('auteurs_id');
            $table->unsignedBigInteger('livres_id');

            $table->foreign('auteurs_id')
            ->references('id')
            ->on('auteurs')
            ->onDelete('cascade');

            $table->foreign('livres_id')
            ->references('id')
            ->on('livres')
            ->onDelete('cascade');
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
