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
            $table->integer('id', true);
            $table->integer('session_id')->index('session_id');
            $table->integer('term_id')->index('term_id');
            $table->integer('class_id')->index('class_id');
            $table->bigInteger('user_id');
            $table->string('present_count', 20)->nullable();
            $table->string('open_count', 20)->nullable();
            $table->date('resume_on')->nullable();
            $table->string('teacher_remark', 225)->nullable();
            $table->string('director_comment', 225)->nullable();
            $table->integer('total_score')->default(0);
            $table->enum('director_approval', ['Approved', 'Not Yet', 'Disapproved'])->default('Not Yet');
            $table->bigInteger('updated_by')->index('updated_by');

            $table->unique(['user_id', 'session_id', 'term_id', 'class_id'], 'unique_exam_sheet');
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
