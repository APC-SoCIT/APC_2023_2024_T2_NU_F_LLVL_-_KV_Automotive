<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('job_orders', function (Blueprint $table) {
            $table->foreignId('account_id')->constrained(); // Assuming you want to add a foreign key constraint to the accounts table
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('job_orders', function (Blueprint $table) {
            $table->dropColumn('account_id');
        });
    }
    
};
