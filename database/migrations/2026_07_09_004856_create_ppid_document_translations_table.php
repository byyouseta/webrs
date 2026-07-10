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
       Schema::create('ppid_document_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ppid_document_id')->constrained()->cascadeOnDelete();
            $table->string('title'); // Judul Informasi
            $table->text('description')->nullable();
            $table->string('locale')->default('id'); // id / en
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ppid_document_translations');
    }
};
