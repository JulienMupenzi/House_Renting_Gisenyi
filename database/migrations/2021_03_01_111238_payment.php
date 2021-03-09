<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Payment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('ptelephone')->nullable();
            $table->string('pnidorpassport')->nullable();
            $table->date('pentrydate')->nullable();
            $table->date('penddate')->nullable();
            $table->float('prentpermonth')->nullable();
            $table->float('prenttotal')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('payment');
        $table->dropForeign('payment_user_id_foreign');
    }
}
