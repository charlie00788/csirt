<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCargosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cargos', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('person_id');
            $table->integer('grade_id')->unsigned();
            $table->integer('especialty_id')->unsigned();
            $table->enum('cargo', ['eva', 'ins', 'dep']);
            $table->unsignedInteger('year');
            $table->boolean('active')->default(true);
            $table->timestamps();

            $table->foreign('person_id')
                ->references('id')->on('people')
                ->onDelete('restrict')
                ->onUpdate('cascade');
            $table->foreign('grade_id')
                ->references('id')->on('grades')
                ->onDelete('restrict')
                ->onUpdate('cascade');
            $table->foreign('especialty_id')
                ->references('id')->on('especialties')
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
        Schema::drop('cargos');
    }
}
