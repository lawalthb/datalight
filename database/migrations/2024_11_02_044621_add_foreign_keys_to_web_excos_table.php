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
        Schema::table('web_excos', function (Blueprint $table) {
            $table->foreign(['updated_by'], 'web_excos_ibfk_1')->references(['id'])->on('admins')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('web_excos', function (Blueprint $table) {
            $table->dropForeign('web_excos_ibfk_1');
        });
    }
};
