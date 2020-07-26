<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Posts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts_laravel', function(Blueprint $table)
        {
            $table->increments('id'); // autoincrement id field
            $table->string('title');   // string field
            $table->string('img');   // unique string field
            $table->string('descr', 200);      // string field with max 60 characters
            $table->string('users_id', 10);      // string field with max 60 characters
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
