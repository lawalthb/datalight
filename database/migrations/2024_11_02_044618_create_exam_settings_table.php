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
        Schema::create('exam_settings', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('session_id')->index('session_id');
            $table->integer('term_id')->index('term_id');
            $table->integer('ca_mark')->default(30);
            $table->integer('exam_mark')->default(70);
            $table->enum('is_active', ['Yes', 'No'])->default('Yes');
            $table->integer('present_count')->nullable();
            $table->date('resume_date')->nullable();
            $table->enum('director_approve', ['Approved', 'Not Yet'])->default('Approved');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('update_at')->useCurrentOnUpdate()->useCurrent();
            $table->integer('pratical_mark')->nullable()->default(0);
            $table->bigInteger('updated_by')->index('updated_by');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exam_settings');
    }
};
