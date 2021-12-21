<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('note_id')->unsigned();
            $table->datetime('date');
            $table->mediumInteger('purchase_mileage')->unsigned()->nullable();
            $table->string('title');
            $table->string('mechanic')->nullable();
            $table->mediumText('summary');
            $table->timestamps();
            $table->foreign('note_id')->references('id')->on('vehicles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notes');
    }
}
