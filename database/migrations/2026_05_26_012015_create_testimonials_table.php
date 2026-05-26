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
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('display_name');
            $table->boolean('is_anonymous')->default(false);
            $table->string('photo')->nullable();
            $table->text('quote');
            $table->foreignId('service_id')->nullable()->constrained('services')->nullOnDelete();
            $table->string('patient_type')->nullable();
            $table->boolean('consent_published')->default(false);
            $table->boolean('is_active')->default(true);
            $table->integer('sort')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
