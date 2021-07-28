<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('sec1_img1', 255)->nullable();
            $table->String('sec1_title1', 255)->nullable();
            $table->longText('sec1_desc1')->nullable();
            $table->String('sec1_img2', 255)->nullable();
            $table->String('sec1_title2', 255)->nullable();
            $table->longText('sec1_desc2')->nullable();
            $table->String('sec1_img3', 255)->nullable();
            $table->String('sec1_title3', 255)->nullable();
            $table->string('sec1_desc3')->nullable();
            $table->String('sec1_img4', 255)->nullable();
            $table->String('sec1_title4', 255)->nullable();
            $table->string('sec1_desc4')->nullable();

            $table->String('sec2_image1', 255)->nullable();
            $table->String('sec2_image2', 255)->nullable();
            $table->String('sec2_image3', 255)->nullable();
            $table->string('sec2_title')->nullable();
            $table->longText('sec2_desc', 255)->nullable();
            $table->String('sec2_subtitle', 255)->nullable();
            $table->String('sec2_link')->nullable();

            $table->String('sec3_title1', 255)->nullable();
            $table->String('sec3_subtitle1', 255)->nullable();
            $table->longText('sec3_desc1')->nullable();
            $table->String('sec3_title2', 255)->nullable();
            $table->String('sec3_subtitle2', 255)->nullable();
            $table->longText('sec3_desc2')->nullable();
            $table->String('sec3_title3', 255)->nullable();
            $table->String('sec3_subtitle3', 255)->nullable();
            $table->string('sec3_desc3')->nullable();
            //products
            $table->String('sec4_title', 255)->nullable();

            $table->String('sec5_image1', 255)->nullable();
            $table->String('sec5_title1', 255)->nullable();
            $table->longText('sec5_desc1')->nullable();
            $table->String('sec5_text_one1', 255)->nullable();
            $table->String('sec5_text_two1', 255)->nullable();
            $table->String('sec5_text_three1', 255)->nullable();
            $table->String('sec5_link1', 255)->nullable();
            // $table->String('sec4_cat_id', 255)->nullable();
            $table->String('sec5_image2', 255)->nullable();
            $table->String('sec5_title2', 255)->nullable();
            $table->longText('sec5_desc2')->nullable();
            $table->String('sec5_text_one2', 255)->nullable();
            $table->String('sec5_text_two2', 255)->nullable();
            $table->String('sec5_text_three2', 255)->nullable();
            $table->String('sec5_link2', 255)->nullable();
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
        Schema::dropIfExists('home_pages');
    }
}
