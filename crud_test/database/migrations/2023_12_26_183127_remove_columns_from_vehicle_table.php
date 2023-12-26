<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveColumnsFromVehicleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vehicle', function (Blueprint $table) {
            $table->dropColumn(['Firstname', 'Minitial', 'Lastname', 'v_history']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // If you want to rollback the changes, you can recreate the columns here
        Schema::table('vehicle', function (Blueprint $table) {
            $table->string('Firstname')->nullable();
            $table->string('Minitial')->nullable();
            $table->string('Lastname')->nullable();
            $table->text('v_history')->nullable();
        });
    }
}