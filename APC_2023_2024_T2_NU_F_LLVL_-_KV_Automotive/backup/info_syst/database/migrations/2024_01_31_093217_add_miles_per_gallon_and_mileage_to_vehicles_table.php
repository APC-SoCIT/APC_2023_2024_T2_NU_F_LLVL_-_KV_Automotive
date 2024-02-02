<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMilesPerGallonAndMileageToVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vehicles', function (Blueprint $table) {
            // Add the "miles_per_gallon" column
            $table->unsignedDecimal('miles_per_gallon')->nullable();

            // Add the "mileage" column
            $table->unsignedInteger('mileage')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vehicles', function (Blueprint $table) {
            // Reverse the changes made in the "up" method
            $table->dropColumn('miles_per_gallon');
            $table->dropColumn('mileage');
        });
    }
}
