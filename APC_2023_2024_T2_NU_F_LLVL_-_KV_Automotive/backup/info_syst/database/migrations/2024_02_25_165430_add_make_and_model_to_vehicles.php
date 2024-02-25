<?php

// database/migrations/YYYY_MM_DD_HHMMSS_add_make_and_model_to_vehicles.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMakeAndModelToVehicles extends Migration
{
    public function up()
    {
        Schema::table('vehicles', function (Blueprint $table) {
            $table->string('make_and_model')->nullable();
        });
    }

    public function down()
    {
        Schema::table('vehicles', function (Blueprint $table) {
            $table->dropColumn('make_and_model');
        });
    }
}
