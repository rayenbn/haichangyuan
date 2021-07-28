<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactuses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 190)->nullable();
            $table->string('opening_time')->nullable();
            $table->string('address')->nullable();
            $table->string('email1')->nullable();
            $table->string('phone')->nullable();
            $table->String('banner_image', 255)->nullable();
            $table->String('image1', 255)->nullable();
            $table->String('image2', 255)->nullable();
            $table->String('image3', 255)->nullable();
            $table->String('image4', 255)->nullable();
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
        Schema::dropIfExists('contactuses');
    }
}
