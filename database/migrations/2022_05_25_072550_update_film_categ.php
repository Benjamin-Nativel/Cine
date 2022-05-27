<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('film_categ',function(Blueprint $table){

            $table->unsignedBigInteger('id_film');
            $table->foreign('id_film')->references('id')->on('films');
            $table->unsignedBigInteger('id_categ');
            $table->foreign('id_categ')->references('id')->on('categories');
            
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
};
