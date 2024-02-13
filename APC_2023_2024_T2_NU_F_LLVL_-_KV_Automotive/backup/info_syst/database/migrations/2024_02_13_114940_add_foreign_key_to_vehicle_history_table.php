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
        Schema::table('vehicle_history', function (Blueprint $table) {
            // Check if the column already exists to avoid errors when rolling back migrations
            if (!Schema::hasColumn('vehicle_history', 'job_order_id')) {
                $table->unsignedBigInteger('job_order_id')->nullable();
                $table->foreign('job_order_id')->references('id')->on('job_orders')->onDelete('SET NULL');
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vehicle_history', function (Blueprint $table) {
            $table->dropForeign(['job_order_id']);
            $table->dropColumn('job_order_id');
        });
    }
};
