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
        Schema::create('service_records', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained('patients');
            $table->foreignId('service_type_id')->constrained('service_types');
            $table->foreignId('entered_by_id')->constrained('users');
            $table->dateTime('occurred_at');
            $table->enum('completion_status', ['completed', 'refused'])->default('completed');
            $table->text('refusal_reason')->nullable();
            $table->text('notes')->nullable();
            $table->enum('status', ['active', 'cancelled'])->default('active');
            $table->text('cancellation_reason')->nullable();
            $table->foreignId('cancelled_by_id')->nullable()->constrained('users');
            $table->timestamp('cancelled_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_records');
    }
};
