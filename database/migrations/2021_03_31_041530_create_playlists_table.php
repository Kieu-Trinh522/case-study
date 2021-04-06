<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlaylistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('playlists', function (Blueprint $table) {
            $table->increments('id');
            $table->string('music_name');
            $table->string('image');
            $table->string('audio');
            $table->timestamps();
        });
    }

    // 'music_name',
    // 'singer_id',
    // 'category_id',
    // 'country_id',
    // 'album_id',
    // 'image',
    // 'audio',
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('playlists');
    }
}
