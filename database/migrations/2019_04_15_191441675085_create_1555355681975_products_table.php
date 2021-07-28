<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create1555355681975ProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('chinese_name')->nullable();
            $table->String('img')->nullable();
            $table->longtext('description')->nullable();
            // $table->decimal('price', 15, 2)->nullable();
            // $table->decimal('price_range', 15, 2)->nullable();
            // $table->String('availability')->nullable(); //0 available; 1 not available; 2 pre-order
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
