<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topics', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image', 255);
            $table->string('title', 255);
            $table->string('content', 3000);
            $table->timestamps();
            $table->Integer('like_count');
            $table->Integer('dislike_count');
            $table->bigInteger('keyword_id')->unsigned();
            $table->bigInteger('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('keyword_id')->references('id')->on('keywords');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('topics');
    }
}
