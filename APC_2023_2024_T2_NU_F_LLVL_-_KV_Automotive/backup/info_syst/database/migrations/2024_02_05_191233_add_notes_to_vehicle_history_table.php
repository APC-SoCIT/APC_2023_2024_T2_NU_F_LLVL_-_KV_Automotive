<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNotesToVehicleHistoryTable extends Migration
{
    public function up()
    {
        Schema::table('vehicle_history', function (Blueprint $table) {
            $table->text('notes')->nullable();
        });
    }

    public function down()
    {
        Schema::table('vehicle_history', function (Blueprint $table) {
            $table->dropColumn('notes');
        });
    }
}
