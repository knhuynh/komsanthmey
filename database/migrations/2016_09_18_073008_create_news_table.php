<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('title', 200)->nullable();
            $table->string('description', 400);
            $table->string('content')->nullable();
            $table->string('image')->default('no-image.jpg');
            $table->string('tags')->nullable();
            $table->integer('views');
            $table->integer('likes');
            $table->integer('dislikes');
            $table->tinyInteger('status')->default(0);
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
        Schema::drop('news');
    }
}
