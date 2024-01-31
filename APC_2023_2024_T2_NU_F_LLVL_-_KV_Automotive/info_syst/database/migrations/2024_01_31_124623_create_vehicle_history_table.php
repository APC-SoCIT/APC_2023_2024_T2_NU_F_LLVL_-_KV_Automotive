<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicleHistoryTable extends Migration
{
    public function up()
    {
        Schema::create('vehicle_history', function (Blueprint $table) {
            $table->id();

            // Foreign Key - Account
            $table->foreignId('account_id')
                ->constrained('accounts')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            // Foreign Key - Vehicle
            $table->foreignId('vehicle_id')
                ->constrained('vehicles')
                ->onUpdate('cascade')
                ->onDelete('cascade');


            $table->date('date_performed');
            $table->text('task_performed');
            $table->string('performed_by');


            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('vehicle_history');
    }
}
