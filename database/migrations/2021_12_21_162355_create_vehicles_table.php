<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->string('vin', 17)->nullable();
            $table->string('license_plate_num', 7)->nullable();
            $table->string('make');
            $table->string('model');
            $table->year('year');
            $table->string('type');
            $table->tinyInteger('num_doors')->unsigned();
            $table->string('color');
            $table->tinyInteger('currently_own');
            $table->date('purchase_date');
            $table->mediumInteger('purchase_mileage')->unsigned();
            $table->mediumText('notes')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
}
