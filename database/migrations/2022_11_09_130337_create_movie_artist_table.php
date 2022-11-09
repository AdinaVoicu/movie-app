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
        Schema::create('movie_artist', function (Blueprint $table) {
            $table->unsignedBigInteger('movie_id');
            $table->foreign('movie_id', 'movie_id_fk_7585337')->references('id')->on('movies')->onDelete('cascade');
            $table->unsignedBigInteger('artist_id');
            $table->foreign('artist_id', 'artist_id_fk_7585337')->references('id')->on('artists')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movie_artist');
    }
};
