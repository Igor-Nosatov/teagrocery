<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheckoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkouts', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('phone');
            $table->string('email');
            $table->string('client_receiver');
            $table->string('phone_receiver');
            $table->string('delivery');
            $table->string('city');
            $table->string('street');
            $table->string('house');
            $table->string('floor');
            $table->string('apartment');
            $table->string('payment_type');
            $table->text('comment');
            $table->json('user_order');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
              ->references('id')->on('users')
              ->onDelete('cascade');
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
        Schema::dropIfExists('checkouts');
    }
}
