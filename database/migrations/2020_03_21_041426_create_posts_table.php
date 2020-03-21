<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 250); //Colst
            $table->text('body')->nullable(); // Coltex
            $table->date('publish_at')->nullable(); // Coldate
            $table->boolean('is_publish')->default(false); // Colbool
            $table->bigInteger('user_id')->unsigned(); // ColBigI
            $table->string('category', 20)->nullable(); // ColSt
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // ColIndFor
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
        Schema::dropIfExists('posts');
    }
}
