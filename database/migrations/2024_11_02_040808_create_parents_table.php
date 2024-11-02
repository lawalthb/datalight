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
        Schema::create('parents', function (Blueprint $table) {
            $table->integer('id');
            $table->string('fullname', 100);
            $table->string('phone', 11);
            $table->string('occupation', 60);
            $table->string('address', 150);
            $table->integer('state');
            $table->integer('lga');
            $table->enum('parent_type', ['Father', 'Monther']);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate()->useCurrent();
            $table->enum('is_active', ['Yes', 'No'])->default('Yes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parents');
    }
};
