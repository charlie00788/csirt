<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('cargo1_id')->unsigned();
            $table->integer('cargo2_id')->unsigned();
            $table->integer('cargo3_id')->unsigned();
            $table->unsignedInteger('kardex_id');
            $table->tinyInteger('dia')->unsigned();
            $table->integer('month_id')->unsigned();
            $table->integer('year')->unsigned();
            $table->integer('numero')->unsigned();
            $table->boolean('active')->default(true);
            $table->string('user_id');
            $table->timestamps();

            $table->foreign('cargo1_id')
                ->references('id')->on('cargos')
                ->onDelete('restrict')
                ->onUpdate('cascade');
            $table->foreign('cargo2_id')
                ->references('id')->on('cargos')
                ->onDelete('restrict')
                ->onUpdate('cascade');
            $table->foreign('cargo3_id')
                ->references('id')->on('cargos')
                ->onDelete('restrict')
                ->onUpdate('cascade');
            $table->foreign('kardex_id')
                ->references('id')->on('kardexes')
                ->onDelete('restrict')
                ->onUpdate('cascade');
            $table->foreign('month_id')
                ->references('id')->on('months')
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
        Schema::drop('documents');
    }
}
