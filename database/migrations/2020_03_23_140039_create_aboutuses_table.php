<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aboutuses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('banner_image', 255)->nullable();
            $table->String('image1', 255)->nullable();
            $table->String('image2', 255)->nullable();
            $table->String('image3', 255)->nullable();
            $table->String('image4', 255)->nullable();
            $table->String('title');
            $table->longText('desc');
            $table->longText('desc1');
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
        Schema::dropIfExists('aboutuses');
    }
}
