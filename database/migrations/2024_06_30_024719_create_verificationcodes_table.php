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
        Schema::create('verificationcodes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('admin_id')->references('id')->on('admins')->cascadeOnDelete();
            $table->string('otp')->nullable();
            $table->timestamp('expire_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('verificationcodes');
    }
};
