<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PostsComments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      // https://laravel.com/docs/6.x/migrations#foreign-key-constraints
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('text', 255);
            $table->binary('img')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('text', 255);
            $table->binary('img')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('post_id');
            $table->foreign('post_id')->references('id')->on('posts');
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
      Schema::dropIfExists('comments');
      Schema::dropIfExists('posts');
    }
}
