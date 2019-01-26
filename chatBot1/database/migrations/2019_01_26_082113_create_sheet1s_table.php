<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSheet1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sheet1s', function (Blueprint $table) {
            $table->text('first name');
            $table->text('last name');
            $table->text('email');
            $table->text('gender');
            $table->increments('messenger user id');
            $table->date('From');
            $table->date('To');
            $table->integer('Adults');
            $table->integer('Children');
            $table->text('Feedback');
            $table->text('Text');
            $table->text('Report Issue');
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
        Schema::dropIfExists('sheet1s');
    }
}
