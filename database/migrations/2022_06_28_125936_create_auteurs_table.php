<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuteursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Auteurs', function (Blueprint $table) {
            $table->string('Nom');
            $table->string('Prénom');
            $table->text('Pays');
            $table->date('Date_décès')->nullable(true);
            $table->id('auteurs_id');

            

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
