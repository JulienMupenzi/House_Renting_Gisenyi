<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->float('price');
            $table->string('ground_size');
            $table->string('bedrooms')->nullable();
            $table->string('bathrooms')->nullable();
            $table->string('garages')->nullable();
            $table->string('image')->nullable();
            $table->text('images')->nullable();
            $table->text('description')->nullable();
            $table->boolean('confirmed')->default(false);
            $table->unsignedBigInteger('user_id');
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
        Schema::dropIfExists('properties');
    }
}
