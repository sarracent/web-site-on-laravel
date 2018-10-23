<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMenubanersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menubaners', function(Blueprint $table) {
            $table->increments('id');
            $table->string('menuinicio');
            $table->string('menunoticia');
            $table->string('menuempresa');
            $table->string('menugaleria');
            $table->string('menunegocio');
            $table->string('menuotros');
            $table->string('banner');
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
        Schema::drop('menubaners');
    }
}
