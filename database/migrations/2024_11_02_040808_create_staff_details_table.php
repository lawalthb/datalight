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
        Schema::create('staff_details', function (Blueprint $table) {
            $table->integer('id');
            $table->bigInteger('user_id');
            $table->integer('class_id')->nullable()->default(0);
            $table->enum('gender', ['Male', 'Female']);
            $table->string('address', 150)->nullable();
            $table->text('guarantor_details')->nullable();
            $table->string('files', 150)->nullable();
            $table->date('date_joined')->nullable();
            $table->text('other_info')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff_details');
    }
};
