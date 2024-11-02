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
        Schema::create('exam_sheet_performances', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('exam_sheet_id');
            $table->integer('subject_id');
            $table->decimal('ca_score', 10)->default(0);
            $table->decimal('exam_score', 10)->default(0);
            $table->decimal('pratical_score', 10)->default(0);
            $table->decimal('total', 10)->default(0);
            $table->string('remark', 100)->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate()->useCurrent();
            $table->bigInteger('updated_by')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exam_sheet_performances');
    }
};
