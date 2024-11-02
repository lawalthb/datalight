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
        Schema::table('terms', function (Blueprint $table) {
            $table->foreign(['session_id'], 'terms_ibfk_1')->references(['id'])->on('sessions')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['updated_by'], 'terms_ibfk_2')->references(['id'])->on('users')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('terms', function (Blueprint $table) {
            $table->dropForeign('terms_ibfk_1');
            $table->dropForeign('terms_ibfk_2');
        });
    }
};
