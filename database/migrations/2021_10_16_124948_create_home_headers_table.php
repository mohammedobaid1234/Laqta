<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeHeadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_headers', function (Blueprint $table) {
            $table->id();
            $table->string('paragraph1')->nullable();
            $table->string('title')->nullable();  
            $table->string('paragraph2')->nullable();  
            $table->string('slider')->nullable();  
            $table->string('video1')->nullable();  
            $table->string('video2')->nullable();  
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
        Schema::dropIfExists('home_headers');
    }
}
