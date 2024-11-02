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
        Schema::create('web_counters', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('icon', 100);
            $table->integer('count')->nullable()->default(0);
            $table->string('text', 100)->nullable();
            $table->integer('position')->default(1);
            $table->timestamp('updated_at')->useCurrentOnUpdate()->useCurrent();
            $table->timestamp('created_at')->useCurrent();
            $table->bigInteger('updated_by')->index('updated_by');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('web_counters');
    }
};
