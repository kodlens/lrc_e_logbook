<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntranceLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrance_logs', function (Blueprint $table) {
            $table->id("entrance_log_id");
            $table->string("student_id")->nullable();
            $table->string("fullname")->nullable();
            $table->string("program")->nullable();
            $table->string("year_level")->nullable();
            $table->string("contact_no")->nullable();
            $table->date("date_entry")->nullable();
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
        Schema::dropIfExists('entrance_logs');
    }
}
