<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentReliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment_relies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image')->nullable();
            $table->string('link')->nullable();
            $table->string('content', 3000)->nullable();
            $table->timestamps();
            $table->bigInteger('comment_id')->unsigned()->nullable();;
            $table->bigInteger('topic_id')->unsigned()->nullable();;
            $table->foreign('comment_id')->references('id')->on('comments');
            $table->foreign('topic_id')->references('id')->on('topics');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comment_relies');
    }
}
