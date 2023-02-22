<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFranchisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('franchises', function (Blueprint $table) {
            $table->id('franchise_id');
            $table->string('franchise_reference')->unique();
            $table->date('date_acquired')->nullable();
            $table->string('operator_name')->nullable();
            $table->string('province')->nullable();
            $table->string('city')->nullable();
            $table->string('barangay')->nullable();
            $table->string('street')->nullable();
            $table->string('vehicle_reference')->nullable();
            $table->string('chassis_reference')->unique();
            $table->string('make')->nullable();
            $table->string('plate_no')->nullable();
            $table->string('route_operation')->nullable();
            $table->string('cab_no')->nullable();
            $table->string('remarks')->nullable();
            $table->string('sysuser')->nullable();
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
        Schema::dropIfExists('franchises');
    }
}
