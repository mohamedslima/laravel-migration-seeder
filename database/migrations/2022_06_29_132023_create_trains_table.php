<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('agency', 20);
            $table->string('departure_station', 20);
            $table->string('arrival_station', 20);
            $table->time('departure_time', 4);
            $table->time('arrival_time', 4);
            $table->string('train_code', 15);
            $table->unsignedTinyInteger('carriages_number');
            $table->boolean('in_time')->default(1);
            $table->boolean('cancelled')->default(0);
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
        Schema::dropIfExists('trains');
    }
}
