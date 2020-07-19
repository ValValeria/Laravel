<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Migrations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('users_laravel', function(Blueprint $table)
        {
            $table->increments('id'); // autoincrement id field
            $table->string('name');   // string field
            $table->string('email')->unique();   // unique string field
            $table->string('password', 60);      // string field with max 60 characters
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
        Schema::drop('users_laravel');
    }
}
