<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddQuantityUsedToJobOrdersTable extends Migration
{
    public function up()
    {
        Schema::table('job_orders', function (Blueprint $table) {
            $table->integer('quantity_used')->nullable();
        });
    }

    public function down()
    {
        Schema::table('job_orders', function (Blueprint $table) {
            $table->dropColumn('quantity_used');
        });
    }
}
