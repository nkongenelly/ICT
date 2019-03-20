<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimelinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql2')->create('timelines', function (Blueprint $table) {
            $table->increments('RowId');
            $table->text('Name');
            $table->text('Date');
            $table->text('TimeIn');
            $table->text('TimeOut');
            $table->text('Site');
            $table->text('LocationIn');
            $table->text('LocationOut');
            $table->text('MatchIn');
            $table->text('MatchOut');
            $table->text('SiteOut');
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
        Schema::dropIfExists('timelines');
    }
}
