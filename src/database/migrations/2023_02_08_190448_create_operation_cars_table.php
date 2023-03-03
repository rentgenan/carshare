<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operation_cars', function (Blueprint $table) {
            $table->id();

            $table->foreignId('car_id')->constrained();
            $table->dateTime('publish_date');
            $table->foreignId('status_id')->constrained();
            $table->unsignedInteger('mileage');
            $table->float('latitude');
            $table->float('longitude');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('operation_cars');
    }
};
