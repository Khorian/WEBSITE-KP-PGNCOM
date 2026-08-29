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
    Schema::create('profil_perusahaans', function (Blueprint $table) {
        $table->id();
        $table->string('judul_sejarah')->default('Perjalanan PGNCOM di Lampung');
        $table->text('sejarah_p1')->nullable();
        $table->text('sejarah_p2')->nullable();
        $table->string('gambar_sejarah')->nullable();
        $table->text('visi')->nullable();
        $table->json('misi')->nullable(); // Menampung array 5 poin Misi
        $table->string('manager_nama')->default('Ade Irawan');
        $table->json('tim_tanggap')->nullable(); // Menampung data tim tanggap darurat
        $table->json('nilai_perusahaan')->nullable(); // Menampung array 6 nilai
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profil_perusahaans');
    }
};
