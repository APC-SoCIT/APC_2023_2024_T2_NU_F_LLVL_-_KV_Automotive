<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToInventories extends Migration
{
    public function up()
    {
        Schema::table('inventories', function (Blueprint $table) {
            $table->foreignId('job_order_id')->nullable()->constrained('job_orders')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('inventories', function (Blueprint $table) {
            $table->dropForeign(['job_order_id']);
            $table->dropColumn('job_order_id');
        });
    }
}
