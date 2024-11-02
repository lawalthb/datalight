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
        Schema::create('exam_sheets', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('session_id');
            $table->integer('term_id');
            $table->integer('class_id');
            $table->bigInteger('user_id');
            $table->string('present_count', 20)->nullable();
            $table->string('open_count', 20)->nullable();
            $table->date('resume_on')->nullable();
            $table->string('teacher_remark', 225)->nullable();
            $table->string('director_comment', 225)->nullable();
            $table->integer('total_score')->default(0);
            $table->enum('director_approval', ['Approved', 'Not Yet', 'Disapproved'])->default('Not Yet');
            $table->bigInteger('updated_by');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exam_sheets');
    }
};
