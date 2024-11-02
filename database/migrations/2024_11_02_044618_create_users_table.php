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
        Schema::create('users', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('email', 60)->unique('email_unique');
            $table->string('name', 50);
            $table->string('phone', 60)->nullable();
            $table->string('password', 150)->default('$2y$10$iOMlpi7zwljJ2SwAow0doOgizVAgByA3M3ykuEiKICLC5ZO5zVBSm');
            $table->string('image', 90)->nullable();
            $table->enum('is_active', ['Yes', 'No']);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->string('account_status', 50)->nullable()->default('Pending');
            $table->integer('user_role_id')->nullable()->index('user_role_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
