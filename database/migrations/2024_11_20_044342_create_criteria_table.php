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
        Schema::create('criteria', function (Blueprint $table) {
            $table->id();
            $table->string('kriteria_nilai'); // Static
            $table->string('pilihan_jawaban'); // Static
            $table->string('jawaban_unit')->nullable(); // Dynamic
            $table->integer('nilai_unit')->nullable(); // Dynamic (calculated)
            $table->text('catatan_unit')->nullable(); // Dynamic
            $table->string('bukti_dukung_unit')->nullable(); // Dynamic
            $table->string('url_bukti_dukung')->nullable(); // Dynamic
            $table->string('jawaban_tpi')->nullable(); // Dynamic
            $table->integer('nilai_tpi')->nullable(); // Dynamic (calculated)
            $table->text('catatan_reviu_tpi')->nullable(); // Dynamic
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('criteria');
    }
};
