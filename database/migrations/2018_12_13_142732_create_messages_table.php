<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id_send')->unsigned();
            $table->string('title');
            $table->string('message');
            $table->integer('user_id_received')->unsigned();
            $table->boolean('status')->default(false);


            $table->foreign('user_id_send')->references('id')->on('users')->onDelete('cascade');

            $table->foreign('user_id_received')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('messages');
    }
}
