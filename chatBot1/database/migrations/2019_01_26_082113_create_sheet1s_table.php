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
            $table->increments('messengerUserId');
            $table->text('firstName')->nullable();
            $table->text('lastName')->nullable();
            $table->text('email')->nullable();
            $table->text('gender')->nullable();          
            $table->date('from')->nullable();
            $table->date('to')->nullable();
            $table->integer('adults')->nullable();
            $table->integer('children')->nullable();
            $table->text('feedback')->nullable();
            $table->text('text')->nullable();
            $table->text('reportIssue')->nullable();
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
