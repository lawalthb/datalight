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
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->bigInteger('user_id');
            $table->integer('price_settings_id')->default(1);
            $table->string('email', 60);
            $table->integer('amount');
            $table->string('fullname', 100)->nullable();
            $table->string('phone_number', 30)->nullable();
            $table->text('reference')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->enum('status', ['Pending', 'Success', 'Failed'])->default('Pending');
            $table->timestamp('updated_at')->useCurrentOnUpdate()->useCurrent();
            $table->string('authorization_url')->nullable();
            $table->string('callback_url')->nullable();
            $table->string('gateway_response')->nullable();
            $table->string('paid_at')->nullable();
            $table->string('channel', 20)->nullable();
            $table->string('message')->nullable();
            $table->string('orderId')->nullable();
            $table->text('other_info')->nullable();
            $table->string('purpose_name', 99)->nullable()->default('');
            $table->integer('purpose_id')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
