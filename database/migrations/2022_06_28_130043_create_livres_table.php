<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLivresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Livres', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Titre');
            $table->string('Auteurs');
            $table->text('Résumé');
            $table->integer('Prix');
            $table->date('Date_parution');
            $table->string('Genre');
            $table->string("Edition");
            $table->string('Langue');
            $table->string('Image')
                ->nullable=true;
            $table->integer('ISBN');
            $table->integer('Stock');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('livres');
    }
}
