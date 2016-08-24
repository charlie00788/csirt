<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->string('id')->primary();
            $table->string('email')->unique();
            $table->enum('role', ['user', 'admin', 'supervisor']);
            $table->unsignedInteger('unity_id');
            $table->integer('grade_id')->unsigned();
            $table->integer('especialty_id')->unsigned();
            $table->boolean('active')->default(true);
            $table->string('password', 60);
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
