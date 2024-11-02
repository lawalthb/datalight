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
        Schema::create('web_sliders', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('image', 150)->nullable();
            $table->string('mobile_image', 100)->nullable();
            $table->string('caption', 100)->nullable();
            $table->text('text')->nullable();
            $table->bigInteger('updated_by')->index('updated_by');
            $table->timestamp('updated_at')->useCurrentOnUpdate()->useCurrent();
            $table->timestamp('created_at')->useCurrent();
            $table->integer('position')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('web_sliders');
    }
};
