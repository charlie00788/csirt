<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->string('id')->primary();
            $table->string('paterno')->nullable()->default('');
            $table->string('materno')->nullable()->default('');
            $table->string('nombres');
            $table->string('tin')->nullable();
            $table->string('city_id', 10);
            $table->timestamps();

            $table->foreign('city_id')
                ->references('id')->on('cities')
                ->onDelete('restrict')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('people');
    }
}
