<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSingersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('singers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('singer_name');
            $table->date('dob');
            $table->string('gender');
            $table->string('description');
            $table->string('image');
            $table->timestamps();
        });
    }

    // 'singer_name',
    //     'dob',
    //     'country_id',
    //     'gender',
    //     'description',
    //     'image'

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('singers');
    }
}
