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
        Schema::create('web_galleries', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('academic_session_id')->index('academic_session');
            $table->string('images', 150)->nullable();
            $table->integer('position')->default(1);
            $table->timestamp('created_at')->useCurrent();
            $table->bigInteger('updated_by')->index('updated_by');
            $table->timestamp('updated_at')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('web_galleries');
    }
};
