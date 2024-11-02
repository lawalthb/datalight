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
        Schema::table('exam_settings', function (Blueprint $table) {
            $table->foreign(['session_id'], 'exam_settings_ibfk_1')->references(['id'])->on('sessions')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['updated_by'], 'exam_settings_ibfk_2')->references(['id'])->on('users')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['term_id'], 'exam_settings_ibfk_3')->references(['id'])->on('terms')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('exam_settings', function (Blueprint $table) {
            $table->dropForeign('exam_settings_ibfk_1');
            $table->dropForeign('exam_settings_ibfk_2');
            $table->dropForeign('exam_settings_ibfk_3');
        });
    }
};
