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
        Schema::create('web_resources', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('icon', 150)->nullable();
            $table->string('title', 100)->nullable();
            $table->string('text')->nullable();
            $table->integer('position')->default(1);
            $table->bigInteger('updated_by')->index('updated_by');
            $table->timestamp('updated_at')->useCurrentOnUpdate()->useCurrent();
            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('web_resources');
    }
};
