<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->unsignedInteger('kardex_id');
            $table->integer('topic_id')->unsigned();
            $table->string('nota');
            $table->boolean('active')->default(true);
            $table->string('user_id');
            $table->timestamps();

            $table->foreign('kardex_id')
                ->references('id')->on('kardexes')
                ->onDelete('restrict')
                ->onUpdate('cascade');
            $table->foreign('topic_id')
                ->references('id')->on('topics')
                ->onDelete('restrict')
                ->onUpdate('cascade');
            $table->foreign('user_id')
                ->references('id')->on('users')
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
        Schema::drop('records');
    }
}
