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
        Schema::create('web_blogs', function (Blueprint $table) {
            $table->integer('id');
            $table->string('title', 200);
            $table->integer('category_id');
            $table->text('short_text')->nullable();
            $table->text('long_text')->nullable();
            $table->string('image', 150);
            $table->enum('is_publish', ['Yes', 'No'])->default('Yes');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('web_blogs');
    }
};
