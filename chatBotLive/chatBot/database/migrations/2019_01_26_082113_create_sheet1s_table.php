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
        Schema::connection('mysql')->create('sheet1s', function (Blueprint $table) {
            $table->increments('messengerUserId');
            $table->text('firstName');
            $table->text('lastName');
            $table->text('email');
            $table->text('gender');
            
            $table->date('from');
            $table->date('to');
            $table->integer('adults');
            $table->integer('children');
            $table->text('feedback');
            $table->text('text');
            $table->text('reportIssue');
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
