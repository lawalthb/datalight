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
        Schema::create('web_headers', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('logo', 100)->nullable();
            $table->string('favicon', 100)->nullable();
            $table->string('site_name', 100)->nullable();
            $table->text('menus')->nullable();
            $table->bigInteger('updated_by')->index('updated_by');
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('web_headers');
    }
};
