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
        Schema::create('web_benefits', function (Blueprint $table) {
            $table->integer('id');
            $table->string('title', 100);
            $table->string('icon', 150)->nullable();
            $table->text('text')->nullable();
            $table->integer('position')->default(1);
            $table->string('image', 150)->nullable();
            $table->bigInteger('updated_by');
            $table->timestamp('updated_at')->useCurrentOnUpdate()->useCurrent();
            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('web_benefits');
    }
};
