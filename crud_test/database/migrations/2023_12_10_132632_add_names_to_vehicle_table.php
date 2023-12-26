<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('vehicle', function (Blueprint $table) {
             $table->string('Firstname')->after('FuelType');
            $table->string('Minitial')->after('Firstname');
            $table->string('Lastname')->after('Minitial');
             $table->text('vehicle_history')->nullable();

        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('vehicle', function (Blueprint $table) {
            $table->dropColumn('Fname');
            $table->dropColumn('Mname');
            $table->dropColumn('Lname');
        });
    }
};
