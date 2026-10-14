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
       Schema::create('ppid_information_requests', function (Blueprint $table) {

            $table->id();

            // Nomor registrasi permohonan
            $table->string('registration_number')->unique();

            // Data pemohon
            $table->string('applicant_name');
            $table->string('nik', 50)->nullable();
            $table->string('organization')->nullable();
            $table->string('email');
            $table->string('phone', 30);

            // Alamat
            $table->text('address')->nullable();

            // Permohonan
            $table->text('requested_information');
            $table->text('purpose')->nullable();

            // Cara memperoleh informasi
            $table->string('delivery_method')->nullable();

            // Cara mendapatkan informasi
            $table->string('information_format')->nullable();

            // Lampiran identitas
            $table->string('identity_file')->nullable();

            // Status
            $table->string('status')->default('diajukan');

            // Catatan petugas
            $table->text('officer_note')->nullable();

            // Tanggal proses
            $table->timestamp('processed_at')->nullable();
            $table->timestamp('completed_at')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ppid_information_requests');
    }
};
