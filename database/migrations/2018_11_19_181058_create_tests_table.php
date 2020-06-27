<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('result1')->nullable();
            $table->string('result2')->nullable();            
            $table->string('result3')->nullable();            
            $table->string('result4')->nullable();            
            $table->string('result5')->nullable();            
            $table->string('result6')->nullable();            
            $table->string('result7')->nullable();            
            $table->string('result8')->nullable();            
            $table->string('result9')->nullable();            
            $table->string('result10')->nullable();            
            $table->string('result11')->nullable();            
            $table->string('result12')->nullable();            
            $table->string('result13')->nullable();            
            $table->string('result14')->nullable();            
            $table->string('result15')->nullable();            
            $table->string('result16')->nullable();            
            $table->string('result17')->nullable();            
            $table->string('result18')->nullable();            
            $table->string('result19')->nullable();            
            $table->string('result20')->nullable();            
            $table->string('result21')->nullable();            
            $table->string('result22')->nullable();            
            $table->string('result23')->nullable();            
            $table->string('result24')->nullable();            
            $table->string('result25')->nullable();            
            $table->string('result26')->nullable();            
            $table->string('result27')->nullable();
            $table->string('result28')->nullable();            
            $table->string('result29')->nullable();
            $table->string('result_total')->nullable();
            $table->string('indication')->nullable();
            $table->integer('user_id')->unsigned();            
            
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

    
            
    
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

        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('tests');

    }
}
