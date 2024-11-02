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
        Schema::create('web_settings', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('top_bar', 3)->nullable();
            $table->string('header', 3)->nullable();
            $table->string('slider', 3)->nullable();
            $table->string('vission', 3)->nullable();
            $table->string('cta', 3)->nullable();
            $table->string('about', 3)->nullable();
            $table->string('count', 3)->nullable();
            $table->string('benefit', 3)->nullable();
            $table->string('resources', 3)->nullable();
            $table->string('registration', 3)->nullable();
            $table->string('event', 3)->nullable();
            $table->string('testimonial', 3)->nullable();
            $table->string('excos', 3)->nullable();
            $table->string('gallery', 3)->nullable();
            $table->string('pricing', 3)->nullable();
            $table->string('faq', 3)->nullable();
            $table->string('contact', 3)->nullable();
            $table->string('footer', 3)->nullable();
            $table->timestamp('updated_at')->useCurrent();
            $table->bigInteger('user_id')->index('user_id');
            $table->string('maintenance', 3)->nullable();
            $table->text('maintenance_text')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('web_settings');
    }
};
