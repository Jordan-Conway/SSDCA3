<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesDirectorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies_directors', function (Blueprint $table) {
            $table->bigInteger('movieId')->unsigned();
            $table->bigInteger('directorId')->unsigned();
            $table->foreign('movieId')->references('id')->on('movies')->onDelete('cascade');
            $table->foreign('directorId')->references('id')->on('directors')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies_directors');
    }
}
