<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvertisementSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertisement_sliders', function (Blueprint $table) {
            $table->id();
            $table->title();
            $table->decimal('regular_price', 8, 2);
            $table->decimal('sale_price', 8, 2);
            $table->string('image')->nullable();
            $table->string('displaying_order')->default(0);
            $table->enum('status', ['active', 'pasif'])->default('active');
            $table->text('button_url');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('advertisement_sliders');
    }
}
