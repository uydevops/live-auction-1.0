<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductGalleriesTable extends Migration
{

    public function up()
    {
        Schema::create('product-galleries', function (Blueprint $table) {
            $table->id();
            $table->string('product_id');
            $table->string('image');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('product-galleries');
    }
}
