<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIniciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inicios', function(Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->longText('grupoind1');
            $table->longText('grupoind2');
            $table->longText('misvis');
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
        Schema::drop('inicios');
    }
}
