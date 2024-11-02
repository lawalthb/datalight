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
        Schema::table('web_blogs', function (Blueprint $table) {
            $table->foreign(['category_id'], 'web_blogs_ibfk_1')->references(['id'])->on('web_blog_categories')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('web_blogs', function (Blueprint $table) {
            $table->dropForeign('web_blogs_ibfk_1');
        });
    }
};
