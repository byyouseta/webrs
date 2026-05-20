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
        Schema::create('languages', function (Blueprint $table) {
            $table->id();
            // id, en, jp, zh dll
            $table->string('code', 2)
                ->unique();

            // Indonesia, English dll
            $table->string('name');

            // nama file icon/bendera
            $table->string('flag')
                ->nullable();

            // bahasa default website
            $table->boolean('is_default')
                ->default(false);

            // aktif/nonaktif
            $table->boolean('is_active')
                ->default(true);

            // urutan tampil
            $table->integer('sort')
                ->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('languages');
    }
};
