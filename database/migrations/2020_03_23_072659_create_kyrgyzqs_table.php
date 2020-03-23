<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKyrgyzqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kyrgyz_qs', function (Blueprint $table) {
          $table->increments('id');
          $table->string('question');
          $table->integer('level');
          $table->string('en');
          $table->string('jp');
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
        Schema::dropIfExists('kyrgyzqs');
    }
}
