<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promo', function (Blueprint $table) {
            $table->id();
            $table->integer('id_website');
            $table->string('name');
            $table->string('img');
            $table->string('end_date');
            $table->text('description');
            $table->string('link');
            $table->string('location');
            $table->string('category');
            $table->string('discount');
            $table->string('maskapai');
            $table->string('lokasi_hotel');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('promo');
    }
}
