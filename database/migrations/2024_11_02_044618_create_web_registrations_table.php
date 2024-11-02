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
        Schema::create('web_registrations', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('title', 100)->nullable();
            $table->string('text')->nullable();
            $table->bigInteger('updated_by')->index('updated_by');
            $table->timestamp('updated_at')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('web_registrations');
    }
};
