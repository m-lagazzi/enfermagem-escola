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
        Schema::create('professional_service_record', function (Blueprint $table) {
            $table->id();
            $table->foreignId('professional_id')->constrained('professionals');
            $table->foreignId('service_record_id')->constrained('service_records');
            $table->unique(['professional_id', 'service_record_id'], 'prof_service_record_unique');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('professional_service_record');
    }
};
