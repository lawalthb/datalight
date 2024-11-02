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
        Schema::create('student_details', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->bigInteger('user_id');
            $table->string('firstname', 60);
            $table->string('middlemane', 60)->nullable();
            $table->string('lastname', 60);
            $table->enum('gender', ['Male', 'Female'])->default('Male');
            $table->date('dob')->nullable();
            $table->integer('class_id');
            $table->enum('religion', ['Christian', 'Islam', 'Others'])->nullable()->default('Others');
            $table->string('address', 200)->nullable();
            $table->enum('blood_group', ['O+', 'A+', 'B+', 'AB+', 'O-', 'A-', 'B-', 'AB-'])->nullable();
            $table->integer('height')->nullable();
            $table->integer('weight')->nullable();
            $table->date('measurement_date')->nullable();
            $table->timestamp('updated_at')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_details');
    }
};
