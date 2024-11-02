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
        Schema::table('exam_sheet_performances', function (Blueprint $table) {
            $table->foreign(['subject_id'], 'exam_sheet_performances_ibfk_2')->references(['id'])->on('subjects')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['exam_sheet_id'], 'exam_sheet_performances_ibfk_3')->references(['id'])->on('exam_sheets')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['updated_by'], 'exam_sheet_performances_ibfk_4')->references(['id'])->on('users')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('exam_sheet_performances', function (Blueprint $table) {
            $table->dropForeign('exam_sheet_performances_ibfk_2');
            $table->dropForeign('exam_sheet_performances_ibfk_3');
            $table->dropForeign('exam_sheet_performances_ibfk_4');
        });
    }
};
