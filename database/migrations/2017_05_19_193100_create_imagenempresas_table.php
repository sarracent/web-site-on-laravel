<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateImagenempresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagenempresas', function(Blueprint $table) {
            $table->increments('id');
            $table->string('imgE1');
            $table->string('imgE2');
            $table->string('imgE3');
            $table->string('imgE4');
            $table->string('imgE5');
            $table->string('imgE6');
            $table->string('imgE7');
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
        Schema::drop('imagenempresas');
    }
}
