<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MakeStatusNullableInJobOrdersTable extends Migration
{
    public function up()
    {
        Schema::table('job_orders', function (Blueprint $table) {
            $table->string('status')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('job_orders', function (Blueprint $table) {
            $table->string('status')->nullable(false)->change();
        });
    }
}
